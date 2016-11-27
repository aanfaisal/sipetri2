<?php

namespace App\Http\Controllers;

use App\BebanPenerangan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class BebanPeneranganController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$bebanpenerangan = BebanPenerangan::paginate(25);

		return view('bebanpenerangan.index', compact('bebanpenerangan'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view('bebanpenerangan.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request) {

		$requestData = $request->all();

		BebanPenerangan::create($requestData);

		Session::flash('flash_message', 'BebanPenerangan Telah Ditambahkan!');

		return redirect('bebanpenerangan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $bebanpenerangan_id
	 *
	 * @return Response
	 */
	public function show($bebanpenerangan_id) {
		$bebanpenerangan = BebanPenerangan::findOrFail($bebanpenerangan_id);

		return view('bebanpenerangan.show', compact('bebanpenerangan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $bebanpenerangan_id
	 *
	 * @return Response
	 */
	public function edit($bebanpenerangan_id) {
		$bebanpenerangan = BebanPenerangan::findOrFail($bebanpenerangan_id);

		return view('bebanpenerangan.edit', compact('bebanpenerangan'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $bebanpenerangan_id
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */

	public function update($bebanpenerangan_id, Request $request) {

		$requestData = $request->all();

		$bebanpenerangan = BebanPenerangan::findOrFail($bebanpenerangan_id);
		$bebanpenerangan->update($requestData);

		Session::flash('flash_message', 'BebanPenerangan Telah Diupdate!');

		return redirect('bebanpenerangan');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $bebanpenerangan_id
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */

	public function destroy($bebanpenerangan_id) {
		BebanPenerangan::destroy($bebanpenerangan_id);

		Session::flash('flash_message', 'BebanPenerangan Telah Dihapus!');

		return redirect('bebanpenerangan');
	}

}
