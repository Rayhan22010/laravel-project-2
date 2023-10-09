<?php

namespace App\Http\Controllers;

use App\Models\cPopularPost;
use App\Models\leftBusiness;
use App\Models\rightCulture;
use Illuminate\Http\Request;

class cultureController extends Controller
{
    public function culture_left_page()
    {
        try{
            $rcValue = rightCulture::paginate(5);
            return view('backend.pages.culture.culture_left',compact('rcValue'));

        }catch(\Throwable $th){
            return $th;
        }
    }

    public function culture_left_store(request $request)
    {
        try{
            $data = new rightCulture();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/homeImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->date_time = $request->date_time;
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->btn_text = $request->btn_text;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }


    public function culture_left_delete($id)
    {
        try {
            $data = rightCulture::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/homeImage/' . $data->image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }

    public function culture_left_edit($id)
    {
        try{
            $data = rightCulture::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }
    public function culture_left_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = rightCulture::find($info_id);
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/homeImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/homeImage'), $imageName);
                $home_hero->image = $imageName;

            }
            $home_hero->date_time = $request->input('date_time');
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->btn_text = $request->input('btn_text');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
//culture popular post
    public function culture_popular_post()
    {
        try{
            $cpValue = cPopularPost::all();
            return view('backend.pages.culture.culture_popular_post',compact('cpValue'));

        }catch(\Throwable $th){
            return $th;
        }
    }

    public function culture_popular_post_store(request $request)
    {
        try{
            $data = new cPopularPost();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/homeImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->date_time = $request->date_time;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function culture_popular_post_delete($id)
    {
        try {
            $data = cPopularPost::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/homeImage/' . $data->image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }
    public function culture_popular_post_edit($id)
    {
        try{
            $data = cPopularPost::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function culture_popular_post_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = cPopularPost::find($info_id);
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/homeImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/homeImage'), $imageName);
                $home_hero->image = $imageName;

            }
            $home_hero->heading = $request->input('heading');
            $home_hero->date_time = $request->input('date_time');;
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
}
