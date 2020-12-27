<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function galleryindex()
    {
        $AcademyGallery = $this->getAllGallery();
        return view('trainees.gallery', compact('AcademyGallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllGallery()
    {

        return
            [
                0   => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/119567748_375355993852074_7618036977747043237_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_ohc=NPPqHy0R-ZMAX_Enewe&_nc_ht=scontent.famm7-1.fna&oh=a7ba47329afc2fc8bc54624f86981efc&oe=6001449A',
                1  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/119554268_375355590518781_1560666727690852132_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_ohc=IJXYFJ9mmeEAX8NtB8u&_nc_oc=AQn7mtZtcQ_5eyw_EpVLMzZMr0Hbd75zu-VqK8rUSEzxzRI9w5Q8mIHgLVRfCULXsjcnTy8Jt8MkkFVxuj4xbTrd&_nc_ht=scontent.famm7-1.fna&oh=e9282ca005d3438eb30282d799ab8002&oe=6001483D',
                2  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/119589588_375355473852126_7992761400131217767_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_ohc=gN3SDDSPhdMAX-LoQJn&_nc_ht=scontent.famm7-1.fna&oh=c0b6b51fdfd286a039066a6e40c395e1&oe=5FFF462E',
                3  => 'https://www.facebook.com/CodingAcademybyOrange/photos/a.134405297947146/375355257185481',
                4  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/106986135_312744873446520_7867807117648570946_n.jpg?_nc_cat=111&ccb=2&_nc_sid=730e14&_nc_ohc=1aQLs7UDlo4AX87qWG0&_nc_ht=scontent.famm7-1.fna&oh=19a21d80662b6af44d0432b42b4a5f87&oe=60005149',
                5  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/85151329_197199155001093_2811586463563513856_o.jpg?_nc_cat=102&ccb=2&_nc_sid=730e14&_nc_ohc=YMY9xtWKGSMAX8vOCs8&_nc_ht=scontent.famm7-1.fna&oh=a8a4722aebb5502d4e2208b6f261b273&oe=600004AA',
                6  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/121032028_394875011900172_3085004873244390746_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_ohc=4BTYvzLQwJAAX8S71j8&_nc_ht=scontent.famm7-1.fna&oh=0bf4e5dcec458ce356ede50f7bf45492&oe=6001B2B5',
                7  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/121581984_401670217887318_1697126113136000716_n.jpg?_nc_cat=107&ccb=2&_nc_sid=730e14&_nc_ohc=PWU2nyDSfOQAX-IAYUJ&_nc_ht=scontent.famm7-1.fna&oh=036c096cb747bb8cf3dd4a7c0e98ccaa&oe=6001788A',
                8  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/123927544_422994895754850_3495892570296475003_o.jpg?_nc_cat=106&ccb=2&_nc_sid=730e14&_nc_ohc=JndI6_pJ53kAX_CcOQ_&_nc_ht=scontent.famm7-1.fna&oh=06ac77a0a71ce50c4d528d29c2201b68&oe=5FFF80B0',
                9  => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/126277743_432936941427312_2801569077354890544_o.jpg?_nc_cat=105&ccb=2&_nc_sid=730e14&_nc_ohc=GQ6IhrCoDc8AX-FXxJg&_nc_ht=scontent.famm7-1.fna&oh=cc0bec96beacd2885d0239c4d7284ac2&oe=60028A07',
                10 => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/130142248_447454476642225_3904384905856678841_o.jpg?_nc_cat=110&ccb=2&_nc_sid=730e14&_nc_ohc=Gh1682qljQAAX9B7dkS&_nc_ht=scontent.famm7-1.fna&oh=3c76510dc371e3d2c67423ab9de38f76&oe=5FFF83C6',
                11 => 'https://scontent.famm7-1.fna.fbcdn.net/v/t1.0-9/127726838_436597674394572_1869732334271906651_o.jpg?_nc_cat=102&ccb=2&_nc_sid=730e14&_nc_ohc=_5PCtVVPfxoAX9bOKEJ&_nc_ht=scontent.famm7-1.fna&oh=4c07f92b85509cb36c67e69947e9fde8&oe=5FFFAE0B'



            ];
    }
}
