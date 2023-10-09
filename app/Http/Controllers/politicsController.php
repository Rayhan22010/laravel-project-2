<?php

namespace App\Http\Controllers;

use App\Models\politicsLeft;
use App\Models\pPopularPost;
use Illuminate\Http\Request;

class politicsController extends Controller
{
    public function politics_left_page()
    {
        try{
            $politicsValue = politicsLeft::all();
            return view('backend.pages.politics.politics_left',compact('politicsValue'));
        }catch(\Throwable $th){
            return $th;
        }
    }

    public function politics_left_store(request $request)
    {
        try{
            $data = new politicsLeft();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/politicsImage'), $imageName);
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

    public function politics_left_delete($id)
    {
        try {
            $data = politicsLeft::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/politicsImage/' . $data->image);
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

    public function politics_left_edit($id)
    {
        try{
            $data = politicsLeft::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function politics_left_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = politicsLeft::find($info_id);
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/politicsImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/politicsImage'), $imageName);
                $home_hero->image = $imageName;
            }
            //            image add end
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

    public function politics_popular_post()
    {
         try{
             $PpopularPost = pPopularPost::all();
             return view('backend.pages.politics.politics_popular_post',compact('PpopularPost'));

         }catch(\Throwable $th){
             return $th;
         }
    }

    public function politics_popular_post_store(request $request)
   {
       try{
           $data = new pPopularPost();
           //            image add start
           $request->validate([
               'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
           ]);
           if ($request->hasFile('image')) {
               $imageName = time() . '.' . $request->image->getClientOriginalExtension();
               $request->image->move(public_path('upload/politicsImage'), $imageName);
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

   public function politics_popular_post_delete($id)
   {
       try {
           $data = pPopularPost::find($id);
           //            image delete from folder and database start
           $public_path = public_path('upload/politicsImage/' . $data->image);
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

   public function politics_popular_post_edit($id)
   {
       try{
           $data = pPopularPost::find($id);
           return response()->json([
               'status' => 200,
               'data' => $data,
           ]);
       }catch(\throwable $th){
           return $th;
       }

   }

   public function politics_popular_post_update(request $request)
   {
       try {
           $info_id = $request->input('info_id');
           $home_hero = pPopularPost::find($info_id);
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/politicsImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/politicsImage'), $imageName);
                $home_hero->image = $imageName;
            }
            //            image add end
           $home_hero->heading = $request->input('heading');
           $home_hero->date_time = $request->input('date_time');
           $home_hero->update();
           return back()->with('message', 'Data Updated successfully');
       } catch (\throwable $th) {
           return $th;
       }
   }





}
