<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Students = $this->getAllStudent();
        return view('welcome', compact('Students'));
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
        $Student = $this->getAllStudent()[$id];
        return   view('trainees.showtrainee')->with('Student', $Student);
    }


    // public function showAttendance()
    // {
    //     $Student = $this->getAllStudent();
    //     return   view('trainees.att')->with('Student', $Student);
    // }

    public function index2()
    {
        $Students = $this->getAllStudent();
        return view('trainees.att', compact('Students'));
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

    public function getAllStudent()
    {
        return [
            [
                'id' => '0',
                'name' => 'Mohammad Alashram',
                'birthday' => '1 April',
                'img' => 'https://images.squarespace-cdn.com/content/v1/553d785ae4b0771c9977dc84/1459488162617-9UKNX9ZEZIEZSGSC9MDW/ke17ZwdGBToddI8pDm48kAIQEBwWVv2kUxfH-jJ9Cw17gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QHyNOqBUUEtDDsRWrJLTmnm4Ek6c6YJYE3gl9iwgPJJQx7fRcieSSJIbmEDf17fcbjyjef3aJkxeOW-A4stSK/image-asset.jpeg?format=1500w',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => true,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => true,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 20:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 8:00',
                        'check_out' => '14 dec 2020 18:00',
                    ],
                ],
            ],
            [
                'id' => '1',
                'name' => 'Lara Mahfouz',
                'birthday' => '4 Nov',
                'img' => 'https://i.pinimg.com/originals/af/06/96/af0696411a0c383c3c7f7514f4c40839.jpg',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => false,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => true,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 14:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 18:00',
                    ],
                ],
            ],
            [
                'id' => '2',
                'name' => 'Tala Mohammad',
                'birthday' => '16 July',
                'img' => 'https://data.whicdn.com/images/244840519/original.jpg',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => true,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => true,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 17:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 17:00',
                    ],
                ],
            ],
            [
                'id' => '3',
                'name' => 'Aya Khawaldeh',
                'birthday' => '5 March',
                'img' => 'https://i.pinimg.com/originals/0b/74/bd/0b74bd80e8e45336c753bea61a4feed0.jpg',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => true,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => false,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 08:00',
                        'check_out' => '15 dec 2020 19:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '4',
                'name' => 'Adam Abusmra',
                'birthday' => '1 may',
                'img' => 'https://i.pinimg.com/564x/51/96/b3/5196b34be5aec2079e4b68190299a544.jpg',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => false,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => true,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 16:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 14:00',
                    ],
                ],
            ],
            [
                'id' => '5',
                'name' => 'Ayham Zaid',
                'birthday' => '15 Feb',
                'img' => 'https://i.pinimg.com/564x/86/2a/44/862a449dec25ca5fc4468981d5c311bf.jpg',
                'github_account' => 'https://github.com/oca-class-b',
                'linkedin' => 'https://www.linkedin.com/feed/',
                'projects' => [
                    0 => [
                        'project_name' => 'HTML and CSS',
                        'is_completed' => true,
                    ],
                    1 => [
                        'project_name' => 'Wordpress',
                        'is_completed' => false,
                    ],
                ],
                'attendance' => [
                    0 => [
                        'check_in' => '15 dec 2020 09:00',
                        'check_out' => '15 dec 2020 19:00',
                    ],
                    1 => [
                        'check_in' => '14 dec 2020 08:00',
                        'check_out' => '14 dec 2020 17:00',
                    ],
                ],
            ],
        ];
    }
}
