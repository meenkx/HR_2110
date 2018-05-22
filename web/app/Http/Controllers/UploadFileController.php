<?php

namespace App\Http\Controllers;

use App\Forms_Evidence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadFileController extends Controller
{

    public function storeImage(Request $request){
//        $image = $request->file('file');
//        if($image!= null){
////            $imageName = str_random(12).$request->file('file')->getClientOriginalExtension();
//            $imageName = "image_".$image->getClientOriginalName();
//            $imageModel = new Forms_Evidence;
//            $imageModel->Form_evi_upload = $imageName;
////            $imageModel->caption = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
//            $request->file('file')->move(public_path() . '/uploads', $imageName);
//            if($imageModel->save()){
////                $images = Forms_Evidence::get();
////                $view = view('partials.imagelist', compact('images'))->render();
////                return response()->json(['id'=>$imageModel->id,'html'=>$view]);
//                return response()->json(['message' => 'GGG'],200);
//            }else{
//                return response()->json(['message' => 'Error while saving image'],400);
//            }
//        }else{
//            return response()->json(['message' => 'Invalid image'],400);
//        }


        $image = $request->file('file');
//        $imageName = Auth::user()->Email."_EvidentImage_".$image->getClientOriginalName();
        if($image->getClientOriginalExtension() == "jpeg" || $image->getClientOriginalExtension() == "jpg" || $image->getClientOriginalExtension() == "png"){
//            $imageName = Auth::user()->Email."_EvidentImage.".$image->getClientOriginalExtension();
            $imageName = Auth::user()->ID_member."_".date("dmY").".".$image->getClientOriginalExtension();
        }
        else if ($image->getClientOriginalExtension() == "pdf"){
//            $imageName = Auth::user()->Email."_EvidentFile.".$image->getClientOriginalExtension();
            $imageName = Auth::user()->ID_member."_".date("dmY").".".$image->getClientOriginalExtension();
        }

        $upload_success = $image->move(public_path('/uploads'),$imageName);

        if ($upload_success) {
            $saveFm = Forms_Evidence::where('ID_Evidence','=',Auth::user()->ID_member."_".date("dmY"))->get();
            if($saveFm->isEmpty())
            {
                $imageUpload = new Forms_Evidence();
                $imageUpload->Form_evi_upload = $imageName;
                $imageUpload->ID_member = Auth::user()->ID_member;
                $imageUpload->ID_Evidence = Auth::user()->ID_member."_".date("dmY");
                $imageUpload->save();
            }
            else{
                $saveFmc = Forms_Evidence::where('ID_Evidence','=',Auth::user()->ID_member."_".date("dmY"))->get();
                foreach ($saveFmc as $saveFmcs){
                    $saveFmcs->Form_evi_upload = $imageName;
                    $saveFmcs->save();
                }
            }
            return response()->json($upload_success, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }
    }

    public function deleteFIle()
    {
        $delImg = Forms_Evidence::where('ID_Evidence', '=', Auth::user()->ID_member."_".date("dmY"))->get();

        foreach ($delImg as $delImgs){
            $delImgs->Form_evi_upload = "";
            $delImgs->save();
        }
        $imageName = Auth::user()->ID_member."_".date("dmY").".pdf";
        unlink(public_path('/uploads/'.$imageName));

    }
}
