<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesispedRequest;
use App\Http\Requests\UpdatesispedRequest;
use App\Repositories\sispedRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class sispedController extends AppBaseController
{
    /** @var  sispedRepository */
    private $sispedRepository;

    public function __construct(sispedRepository $sispedRepo)
    {
        $this->sispedRepository = $sispedRepo;
    }

    /**
     * Display a listing of the sisped.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sispeds = $this->sispedRepository->all();

        return view('sispeds.index')
            ->with('sispeds', $sispeds);
    }

    /**
     * Show the form for creating a new sisped.
     *
     * @return Response
     */
    public function create()
    {
        return view('sispeds.create');
    }

    /**
     * Store a newly created sisped in storage.
     *
     * @param CreatesispedRequest $request
     *
     * @return Response
     */
    public function store(CreatesispedRequest $request)
    {
        $input = $request->all();

        $sisped = $this->sispedRepository->create($input);

        Flash::success('Produto salvo com sucesso!');

        return redirect(route('sispeds.index'));
    }

    /**
     * Display the specified sisped.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sisped = $this->sispedRepository->find($id);

        if (empty($sisped)) {
            Flash::error('Sisped not found');

            return redirect(route('sispeds.index'));
        }

        return view('sispeds.show')->with('sisped', $sisped);
    }

    /**
     * Show the form for editing the specified sisped.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sisped = $this->sispedRepository->find($id);

        if (empty($sisped)) {
            Flash::error('Sisped not found');

            return redirect(route('sispeds.index'));
        }

        return view('sispeds.edit')->with('sisped', $sisped);
    }

    /**
     * Update the specified sisped in storage.
     *
     * @param int $id
     * @param UpdatesispedRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesispedRequest $request)
    {
        $sisped = $this->sispedRepository->find($id);

        if (empty($sisped)) {
            Flash::error('Sisped not found');

            return redirect(route('sispeds.index'));
        }

        $sisped = $this->sispedRepository->update($request->all(), $id);

        Flash::success('Produto atualizado com sucesso!');

        return redirect(route('sispeds.index'));
    }

    /**
     * Remove the specified sisped from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sisped = $this->sispedRepository->find($id);

        if (empty($sisped)) {
            Flash::error('Sisped not found');

            return redirect(route('sispeds.index'));
        }

        $this->sispedRepository->delete($id);

        Flash::success('Produto excluído com sucesso!');

        return redirect(route('sispeds.index'));
    }
}
