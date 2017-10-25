<?php

namespace App\Http\Controllers;

use App\OurFeatures;
use Illuminate\Http\Request;

class OurFeaturesController extends Controller
{
    public function features(){
        return view('admin.features.add-features');
    }
    public function saveFeatureInfo(Request $request){
        $featureImage = $request->file('feature_image');
        $imageName = $featureImage->getClientOriginalName();
        $directory = 'feature_images/';
        $imageUrl = $directory.$imageName;
        $featureImage->move($directory, $imageName);
        $features = new OurFeatures();
        $features->feature_title = $request->feature_title;
        $features->feature_image = $imageUrl;
        $features->feature_description = $request->feature_description;
        $features->publication_status = $request->publication_status;
        $features->save();
        return redirect('/add-features')->with('message','Features Info Save Successfully.');

    }
    public function manageFeatureInfo(){
        $features=OurFeatures::all();
        return view('admin.features.manage-features',['features'=>$features]);
    }


    public function unpublishedFeatureInfo($id){

        $featureById = OurFeatures::find($id);
        $featureById->publication_status = 0;
        $featureById->save();
        return redirect('/manage-features');

    }
    public function publishedFeatureInfo($id){
        $featureById = OurFeatures::find($id);
        $featureById->publication_status = 1;
        $featureById->save();
        return redirect('/manage-features');

    }
    public function editFeatureInfo($id){
        $featureById=OurFeatures::find($id);
        return view('admin.features.edit-feature',['featureById'=>$featureById]);
    }
    public function updateFeatureInfo(Request $request){

        if($request->feature_image){
            $features = OurFeatures::find($request->feature_id);
            unlink($features->feature_image);
            $featureImage = $request->file('feature_image');
            $imageName = $featureImage->getClientOriginalName();
            $directory = 'feature_images/';
            $imageUrl = $directory.$imageName;
            $featureImage->move($directory, $imageName);
            $features = new OurFeatures();
            $features->feature_title = $request->feature_title;
            $features->feature_image = $imageUrl;
            $features->feature_description = $request->feature_description;
            $features->publication_status = $request->publication_status;
            $features->save();
        }else{
            $features = OurFeatures::find($request->feature_id);
            $features->feature_title = $request->feature_title;
            $features->feature_description = $request->feature_description;
            $features->publication_status = $request->publication_status;
            $features->save();

            return redirect('/manage-features');

        }
    }

    public function deleteFeatureInfo($id){
        $featureById=OurFeatures::find($id);
        $featureById->delete();
        return redirect('manage-features');
    }
}
