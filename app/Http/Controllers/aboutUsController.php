<?php

namespace App\Http\Controllers;

use App\Models\aboutBottomRight;
use App\Models\aboutPostGrid;
use App\Models\aboutTeam;
use App\Models\aboutTeamHeading;
use App\Models\bottomLeft;
use App\Models\topAbout;
use Illuminate\Http\Request;
use Throwable;

class aboutUsController extends Controller
{
    public function backend_top_about_page()
    {
        try{
            $value = topAbout::all();
            return view('backend.pages.about.about_top_section',compact('value'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function backend_top_about_store(request $request)
    {
        try{
            $data = new topAbout();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->btn_text = $request->btn_text;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function backend_top_about_delete($id)
    {
        try {
            $data = topAbout::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/aboutImage/' . $data->image);
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

    public function backend_top_about_edit($id)
    {
        try{
            $data = topAbout::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function backend_top_about_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = topAbout::find($info_id);
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/aboutImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $home_hero->image = $imageName;
            }
            //            image add end
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->btn_text = $request->input('btn_text');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    // post grid

    public function post_grid_page()
    {
        try{
            $value = aboutPostGrid::all();
           return view('backend.pages.about.post_grid',compact('value'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function post_grid_store(request $request)
    {
        try{
            $data = new aboutPostGrid();
            $data->icone = $request->icone;
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function post_grid_delete($id)
    {
        try {
            $data = aboutPostGrid::find($id);
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }

    public function post_grid_edit($id)
    {
        try{
            $data = aboutPostGrid::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function post_grid_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = aboutPostGrid::find($info_id);
            $home_hero->icone = $request->input('icone');
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    //About team

    public function about_team_page()
    {
        try{
            $value = aboutTeam::all();
           return view('backend.pages.about.team',compact('value'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function about_team_store(request $request)
    {
        try{
            $data = new aboutTeam();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function about_team_delete($id)
    {
        try {
            $data = aboutTeam::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/aboutImage/' . $data->image);
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

    public function about_team_edit($id)
    {
        try{
            $data = aboutTeam::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function about_team_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = aboutTeam::find($info_id);
             //            image add start
             $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/aboutImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $home_hero->image = $imageName;
            }
            //            image add end
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    //About heading

    public function team_heading_page()
    {
        try{
            $heading = aboutTeamHeading::all();
           return view('backend.pages.about.heading_about_team',compact('heading'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function about_team_heading_store(request $request)
    {
        try{
            $data = new aboutTeamHeading();
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function about_team_heading_delete($id)
    {
        try {
            $data = aboutTeamHeading::find($id);
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }

    public function about_team_heading_edit($id)
    {
        try{
            $data = aboutTeamHeading::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }
    public function about_team_heading_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = aboutTeamHeading::find($info_id);
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }




    //after about team
    public function bottom_left_page()
    {
        try{
            $value = bottomLeft::all();
            return view('backend.pages.about.bottom_left',compact('value'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function bottom_left_store(request $request)
    {
        try{
            $data = new bottomLeft();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function bottom_left_delete($id)
    {
        try {
            $data = bottomLeft::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/aboutImage/' . $data->image);
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

    public function bottom_left_edit($id)
    {
        try{
            $data = bottomLeft::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function bottom_left_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = bottomLeft::find($info_id);
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $public_path = public_path('upload/aboutImage/' . $home_hero->image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/aboutImage'), $imageName);
                $home_hero->image = $imageName;
            }
            //            image add end
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    //about bottom right
    public function bottom_right_page()
    {
        try{
            $value = aboutBottomRight::all();
            return view('backend.pages.about.bottom_right',compact('value'));
        }catch(Throwable $th){
            return $th;
        }
    }

    public function bottom_right_store(request $request)
    {
        try{
            $data = new aboutBottomRight();
            $data->icone = $request->icone;
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function bottom_right_delete($id)
    {
        try {
            $data = aboutBottomRight::find($id);
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }

    public function bottom_right_edit($id)
    {
        try{
            $data = aboutBottomRight::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function bottom_right_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = aboutBottomRight::find($info_id);
            $home_hero->icone = $request->input('icone');
            $home_hero->heading = $request->input('heading');
            $home_hero->description = $request->input('description');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }






}
