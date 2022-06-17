<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CVController extends BaseController
{
    public function index()
    {
        return view('pages/dashboard/cv/index');
    }

    public function store_basic_info()
    {
        $data = $this->request->getVar();
        $this->basicInfo->save([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'profession' => $data['profession'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'website' => $data['website'],
            'address' => $data['address'],
            'post_code' => $data['post_code'],
            'division' => $data['division'],
            'user_id' => user_id()
        ]);

        return redirect('education-new')->with('message', 'Biodata berhasil ditambahkan!');
    }
}
