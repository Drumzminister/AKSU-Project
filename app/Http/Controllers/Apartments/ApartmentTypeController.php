<?php

namespace App\Http\Controllers\Apartments;

use App\Http\Requests\Apartments\ApartmentTypeRequest;
use App\Interfaces\Apartments\ApartmentTypeInterface;
use Shamaseen\Repository\Generator\Utility\Controller;

/**
 * Class ApartmentTypeController
 * @package App\Http\Controllers\Apartments
 * @property-read ApartmentTypeInterface $interface
 */
class ApartmentTypeController extends Controller
{

    protected $routeIndex = 'admin/apartment/types';

    protected $pageTitle = 'Apartment Type';
    protected $createRoute = 'admin/apartment/types/create';

    protected $viewIndex = 'apartment.types.index';
    protected $viewCreate = 'apartment.types.create';
    protected $viewEdit = 'apartment.types.edit';
    protected $viewShow = 'apartment.types.show';

    /**
     * ApartmentTypeController constructor.
     * @param ApartmentTypeInterface $interface
     * @param ApartmentTypeRequest $request
     */
    public function __construct(ApartmentTypeInterface $interface, ApartmentTypeRequest $request)
    {
        parent::__construct($interface, $request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parent::index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return parent::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return parent::store();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return parent::show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return parent::edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        return parent::update($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        return parent::destroy($id);
    }
}
