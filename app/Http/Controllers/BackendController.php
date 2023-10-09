<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\businessGrid;
use App\Models\footerRecentPost;
use App\Models\HomeHero;
use App\Models\homePolitics;
use App\Models\homeTravel;
use App\Models\leftBusiness;
use App\Models\leftCulture;
use App\Models\rightBusiness;
use App\Models\rightCulture;
use Illuminate\Http\Request;


class BackendController extends Controller
{
    public function backend_index()
    {
        try {
            return view('backend.pages.backend_index');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function backend_dashboard()
    {
        try {
            $value = HomeHero::all();
            return view('backend.pages.backend_dashboard',compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

// search
    public function search_data(request $request)
    {
        try {
            $data= $request->input('backend_search');
            $value= DB::table('home_heroes')
            ->where('heading','like','%'.$data.'%')
            ->orwhere('date_time','like','%'.$data.'%')
            ->get();

            return view('backend.pages.home_hero',compact('value'));


        } catch (\throwable $th) {
            return $th;
        }
    }


//Home Page start ******************************************************

// Home hero start
    public function home_hero()
    {
        try {
            $value = HomeHero::all();
            return view('backend.pages.home_hero',compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function home_hero_store(request $request)
    {
        try {
            $data = new HomeHero();
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
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function home_hero_delete($id)
    {
        try {
            $data = HomeHero::find($id);
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

    public function home_hero_edit($id)
    {
        try{
            $data = HomeHero::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function home_hero_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = HomeHero::find($info_id);

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
            $home_hero->date_time = $request->input('date_time');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    // Home hero End

    //Home Left business start
    public function left_business()
    {
        try {
            $bValue = leftBusiness::all();
            return view('backend.pages.left_business',compact('bValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function left_business_store(request $request)
    {
        try {
            $data = new leftBusiness();
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
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function left_business_delete($id)
    {
        try {
            $data = leftBusiness::find($id);
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

    public function left_business_edit($id)
    {
        try{
            $data = leftBusiness::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function left_business_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = leftBusiness::find($info_id);

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
    //Home Left business End

    //Home Right business start
    public function right_business()
    {
        try{
            $rValue = rightBusiness::all();
            return view('backend.pages.right_business',compact('rValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function right_business_store(request $request)
    {
        try{
            $data = new rightBusiness();
            $data->date_time = $request->date_time;
            $data->heading = $request->heading;
            $data->btn_text = $request->btn_text;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function right_business_delete($id)
    {
        try {
            $data = rightBusiness::find($id);
            $data->delete();
            return back()->with('message', 'Data deleted successfully');

        } catch (\throwable $th) {
            return $th;
        }
    }

    public function right_business_edit($id)
    {
        try{
            $data = rightBusiness::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function right_business_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = rightBusiness::find($info_id);
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
    //Home Right business End

    //Home business grid start
    public function business_grid()
    {
        try{
            $gValue = businessGrid::all();
            return view('backend.pages.business_grid',compact('gValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function business_grid_store(request $request)
    {
        try{
            $data = new businessGrid();
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
            $data->btn_text = $request->btn_text;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }
    public function business_grid_delete($id)
    {
        try {
            $data = businessGrid::find($id);
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

    public function business_grid_edit($id)
    {
        try{
            $data = businessGrid::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }
    }

    public function business_grid_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = businessGrid::find($info_id);

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

    //Home business grid End

    //Home Left Culture
    public function left_culture()
    {
        try{
            $cValue = leftCulture::all();
            return view('backend.pages.left_culture',compact('cValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function left_culture_store(request $request)
    {
        try{
            $data = new leftCulture();
            $data->date_time = $request->date_time;
            $data->heading = $request->heading;
            $data->btn_text = $request->btn_text;
            $data->description = $request->description;
            $data->save();
            return back()->with('message','data inserted successfully.');

        }catch(\throwable $th){
            return $th;
        }
    }

    public function left_culture_delete($id)
    {
        try{
            $data = leftCulture::find($id);
            $data->delete();
            return back()->with('message','Data deleted successfully');

        }catch(\throwable $th){
            return $th;
        }
    }

    public function left_culture_edit($id)
    {
        try{
            $data = leftCulture::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function left_culture_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = leftCulture::find($info_id);
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

    //Home Right Culture
    public function right_culture()
    {
        try{
            $rcValue = rightCulture::all();
            return view('backend.pages.right_culture',compact('rcValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function right_culture_store(request $request)
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

    public function right_culture_delete($id)
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

    public function right_culture_edit($id)
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

    public function right_culture_update(request $request)
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
    // Home Politics
    public function home_politics()
    {
        try{
            $pValue = homePolitics::all();
            return view('backend.pages.home_politics',compact('pValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function home_politics_store(request $request)
    {
        try{
            $data = new homePolitics();
            //            image add start
            $request->validate([
                'p_image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('p_image')) {
                $imageName = time() . '.' . $request->p_image->getClientOriginalExtension();
                $request->p_image->move(public_path('upload/homeImage'), $imageName);
                $data->p_image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
             //            image add start
             $request->validate([
                'r_image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('r_image')) {
                $imageName = time() . '.' . $request->r_image->getClientOriginalExtension();
                $request->r_image->move(public_path('upload/reporterImage'), $imageName);
                $data->r_image = $imageName;
            }
            //            image add end
            $data->r_name = $request->r_name;
            $data->date_time = $request->date_time;
            $data->description = $request->description;
            $data->btn_text = $request->btn_text;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        }catch(\throwable $th){
            return $th;
        }
    }

    public function home_politics_delete($id)
    {
        try {
            $data = homePolitics::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/homeImage/' . $data->p_image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            //            image delete from folder and database start
            $public_path = public_path('upload/reporterImage/' . $data->r_image);
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

    public function home_politics_edit($id)
    {
        try{
            $data = homePolitics::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }
    public function home_politics_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = homePolitics::find($info_id);

            if($request->hasFile('p_image')){
                $public_path = public_path('upload/homeImage/' . $home_hero->p_image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->p_image->getClientOriginalExtension();
                $request->p_image->move(public_path('upload/homeImage'), $imageName);
                $home_hero->p_image = $imageName;
            }

            if($request->hasFile('r_image')){
                $public_path = public_path('upload/reporterImage/' . $home_hero->r_image);
                if (file_exists($public_path)) {
                    unlink($public_path);
                }
                $imageName = time() . '.' . $request->r_image->getClientOriginalExtension();
                $request->r_image->move(public_path('upload/reporterImage'), $imageName);
                $home_hero->r_image = $imageName;
            }

            $home_hero->heading = $request->input('heading');
            $home_hero->r_name = $request->input('r_name');
            $home_hero->date_time = $request->input('date_time');
            $home_hero->description = $request->input('description');
            $home_hero->btn_text = $request->input('btn_text');
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    //Home Tarvel start
    public function home_travel()
    {
        try {
            $htValue = homeTravel::all();
            return view('backend.pages.home_travel',compact('htValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function home_travel_store(request $request)
    {
        try {
            $data = new homeTravel();
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
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function home_travel_delete($id)
    {
        try {
            $data = homeTravel::find($id);
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

    public function home_travel_edit($id)
    {
        try{
            $data = homeTravel::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }

    public function home_travel_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = homeTravel::find($info_id);
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

//Home Page end ******************************************************


    // Footer -> recent post
    public function recent_post()
    {
        try{
            $rpValue = footerRecentPost::all();
            return view('backend.pages.recent_post',compact('rpValue'));
        }catch(\throwable $th){
            return $th;
        }
    }

    public function recent_post_store(request $request)
    {
        try{
            $data = new footerRecentPost();
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
    public function recent_post_delete($id)
    {
        try {
            $data = footerRecentPost::find($id);
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
    public function recent_post_edit($id)
    {
        try{
            $data = footerRecentPost::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        }catch(\throwable $th){
            return $th;
        }

    }
    public function recent_post_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $home_hero = footerRecentPost::find($info_id);
            //            image add start
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
            //            image add end
            $home_hero->heading = $request->input('heading');
            $home_hero->date_time = $request->input('date_time');;
            $home_hero->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }





}
