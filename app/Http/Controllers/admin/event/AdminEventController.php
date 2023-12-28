<?php
namespace App\Http\Controllers\admin\event;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class AdminEventController extends Controller
{
    public function __construct() {
        $this->middleware('admin'); 
        $events = Event::paginate(10);
        $attributes = [];
        foreach ($events as $ev) {
            $attributes[$ev->id] = json_decode($ev->attributes, true);
        }
        \View()->share(['attributes' => $attributes]);
    }
    public function eventManager(){
        $events = Event::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.event.eventmanager', compact('events'));
    }
    public function createEvent() {
        return view('admin.event.form');
    }
    public function convertTimeStatus($request)
    {
        $this->converStartTime = date("Y-m-d H:i:s", strtotime($request->start_date));
        $this->converEndTime = date("Y-m-d H:i:s", strtotime($request->end_date));
        $timeStartEvent = Carbon::parse($this->converStartTime);
        $timeEndEvent = Carbon::parse($this->converEndTime);
        $currentTime = Carbon::now();
        if ($timeStartEvent > $currentTime) {
            $status = 2;
        } elseif ($timeEndEvent < $currentTime) {
            $status = 3;
        } else {
            $status = 1;
        }
        return $status;
    }
    public function uploadImage($request, $nameInput) {
        $fileData = [];
        if ($request->hasFile($nameInput)) {
            $uploadedFiles = $request->file($nameInput);
            $i = 1;
            foreach ($uploadedFiles as $file) {
                // $fileName = $file->getClientOriginalName();
                // $file->storeAs('public/upload/img_banner', $fileName);
                $fileData[] = Cloudinary::upload($file->getRealPath())->getSecurePath();
                $i++;
            }
        }
        return $fileData;
    }
    public function addEvent(EventRequest $request) {
        $jsonDataHeader = $this->uploadImage($request, 'filesHeader');
        $jsonDataFooter = $this->uploadImage($request, 'filesFooter');
        $jsonDataLeft   = $this->uploadImage($request, 'filesLeft');
        $jsonDataRight  = $this->uploadImage($request, 'filesRight');
        $selectColor = $request->input('selectedColor');

        $jsonData = [
            'imageHeader' => $jsonDataHeader,
            'imageFooter' => $jsonDataFooter,
            'imageLeft' => $jsonDataLeft,
            'imageRight' => $jsonDataRight,
            'colorEvent' => $selectColor
        ];
        $status = $this->convertTimeStatus($request);

        Event::create([
            'event_name' => $request->event_name,
            'start_date' => $this->converStartTime,
            'end_date' => $this->converEndTime,
            'describe' => $request->describe,
            'status' => $status,
            'attributes' => json_encode($jsonData),
            'priority' => $request->priority,
        ]);
        return redirect()->route('admin.event');
    }
    public function editEvent($id) {
        $event = Event::where('id', $id)->first();
        return view('admin.event.form', ['event' => $event]);
    }
    public function updateEvent(EventRequest $request, $id) {
        $jsonDataHeader = $this->uploadImage($request, 'filesHeader');
        $jsonDataFooter = $this->uploadImage($request, 'filesFooter');
        $jsonDataLeft   = $this->uploadImage($request, 'filesLeft');
        $jsonDataRight  = $this->uploadImage($request, 'filesRight');
        $selectColor = $request->input('selectedColor');
        $jsonData = [
            'imageHeader' => $jsonDataHeader,
            'imageFooter' => $jsonDataFooter,
            'imageLeft' => $jsonDataLeft,
            'imageRight' => $jsonDataRight,
            'colorEvent' => $selectColor
        ];
        $oldData = Event::where('id', $id)->value('attributes');
        $array2 = json_decode($oldData, true);
        foreach ($jsonData as $key => $value) {
            if (!empty($array2[$key]) && is_array($array2[$key])) {
                if($key == "colorEvent"){
                    $array2[$key] = $value;
                }else{
                    $array2[$key] = array_merge($array2[$key], $value);
                }
            } else {
                $array2[$key] = $value;
            }
        }
        $status = $this->convertTimeStatus($request);
        Event::where('id', $id)->update([
            'event_name' => $request->event_name,
            'start_date' => $this->converStartTime,
            'end_date' => $this->converEndTime,
            'describe' => $request->describe,
            'status' => $status,
            'attributes' => json_encode($array2),
            'priority' => $request->priority,
        ]);
        return redirect()->route('admin.event');
    }
    public function deleteEvent($id){
        Event::where('id', $id)->delete();
        return redirect()->back();
    }
}
