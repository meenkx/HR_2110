@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="img-picture-profile">
                    <img src="{{ asset('../img/icon/June_2017_BNK48_Nayika_Srinian.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-md-8">
                <div>
                    <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                        General information
                    </div>
                    <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;">
                        <div>
                            <span style="font-weight: bold">Name :</span> <span>Ms. Nayika Srinian</span>
                            <span style="padding-left: 40px;font-weight: bold">Birthday :</span> <span>November 10, 1996</span>
                            <span style="padding-left: 40px;font-weight: bold">Age :</span> <span>26</span>
                        </div>
                        <div>
                            <span style="font-weight: bold">Gender :</span> <span><img src="{{ asset('../img/icon/femenine.png') }}" alt="" width="15px" height="15px"></span>
                            <span style="padding-left: 40px;font-weight: bold">Marital :</span> <span>Single</span>
                            <span style="padding-left: 40px;font-weight: bold">Education :</span> <span>Mahidol University</span>
                        </div>

                    </div>
                </div>

                <div style="margin-top: 70px">
                    <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                        Contact information
                    </div>
                    <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;">
                        <div>
                            <span style="font-weight: bold">E-mail :</span> <span>nayika_bnk48@mail.in.th</span>
                            <span style="padding-left: 40px;font-weight: bold">Mobile :</span> <span>088-46250</span>

                        </div>
                        <div>
                            <span style="font-weight: bold">Work Phone :</span> <span>02-1234567</span>
                            <span style="padding-left: 40px;font-weight: bold">Emergency Contact :</span> <span>085-2148856</span>
                        </div>

                    </div>
                </div>

                <div style="margin-top: 70px">
                    <div style="border-bottom: 1px solid black;font-size: 30px;font-weight: bold;">
                        Job information
                    </div>
                    <div style="padding-top: 15px;font-size: 18px;line-height: 1.8;">
                        <div>
                            <span style="font-weight: bold">Department :</span> <span>Introduction International</span>
                        </div>
                        <div>
                            <span style="font-weight: bold">Job :</span> <span>bioresource & environmental biotechnology</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection