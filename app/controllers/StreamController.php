<?php

class StreamController extends \BaseController {

	private $client = null;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->client = new GuzzleHttp\Client;
	}

	/**
	 * Guarantees that every stream's channel will have a status.
	 *
	 * @param  mixed $streams the stream or streams to fix
	 * @return array list of all the streams with values for the status
	 */
	public function fixStatus($streams) {
		if (! is_array($streams)) {
			$streams = array($streams);
		}

		foreach($streams as $stream) {
			if (! isset($stream->channel->status)) {
				$stream->channel->status = $stream->channel->display_name;
			}
		}

		return $streams;
	}

	/**
	 * Display a listing of featured resource.
	 * GET /featured
	 *
	 * @return Response
	 */
	public function featured()
	{
		$streams = $this->client->get('https://api.twitch.tv/kraken/streams?limit=13',
				['query' =>
					['game' => 'Halo: The Master Chief Collection'],
					['embeddable' => 'true']
				])->json(['object' => true]);
		//DBug::Dbug($streams, true);
		$streams = $streams->streams;

		$streams = $this->fixStatus($streams);

		return View::make('streams.featured', compact('streams'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /streams
	 *
	 * @return Response
	 */
	public function index()
	{
		$offset = 0;
		$streamsArray = [];
		do {
			$streams = $this->client->get('https://api.twitch.tv/kraken/streams?offset=' . $offset,
				['query' => ['game' => 'Halo: The Master Chief Collection'], ['embeddable' => 'true']])->json(['object' => true]);
			$streamsArray = array_merge($streamsArray, $streams->streams);
			$offset = count($streamsArray);
		}
		while ($offset < $streams->_total );

		$streams = $streamsArray;

		$streams = $this->fixStatus($streams);

		return View::make('streams.index', compact('streams'));
	}

	/**
	 * Display the specified resource.
	 * GET /streams/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$stream = $this->client->get('https://api.twitch.tv/kraken/streams/' . $id)->json(['object' => true]);

		$stream = $this->fixStatus($stream->stream);
		$stream = $stream[0];

		//DBug::DBug($stream, true);

		return View::make('streams.show', compact('stream'));
	}

}
