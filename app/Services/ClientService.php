<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Client;
use App\Services\UtilityService;

class ClientService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Client.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listClients()
    {
        return Client::get();
    }

    /**
     * Datatebles
     * @param client
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($clients)
    {
        $tableData = Datatables::of($clients)
            ->addColumn('type', function (Client $client) {
                return $client->getType->type;

            })
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','clients')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions'])->make(true);

        return $tableData ;
    }

    /**
     * Get client.
     * @param $clientId
     * @return Client
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getClient($clientId)
    {
        try {
            $client = Client::findOrFail($clientId);
            return $client;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Client not found');
        }
    }

    /**
     * Create client.
     * @param $clientId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createClient($parameters)
    {
        try {
            $client = new Client();
            $client->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update client.
     * @param $clientId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateClient($parameters, $clientId)
    {
        try {
            $client = Client::findOrFail($clientId);
            $client->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete client.
     * @param $clientId
     * @return Client
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteClient($clientId)
    {
        return Client::find($clientId)->delete();
    }

    /**
     * get clients front.
     * @author Alaa <alaaragab34@gmail.com>
     */
    static function clientsHome()
    {
        return Client::where('type_id', 1)->get();
    }

    /**
     * get partners front.
     * @author Alaa <alaaragab34@gmail.com>
     */
    static function partnersHome()
    {
        return Client::where('type_id', 2)->get();
    }
}
