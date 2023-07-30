<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Schedule;
use App\Models\Requests;
use App\Models\Appointment;

class AdminController extends Controller
    {

        public function admin()
        {
            return view('admin/admin');
        }

        // services routes====================================================================================
        // public function services()
        // {
        //     $services = Service::all();
        //     return view('admin/admin_services', compact('services'));
        // }

        public function createServices()
        {
            return view('admin/services_create');
        }


        public function addServices(Request $request)
        {
            $createServices = new Service;
            if ($createServices) {
                $createServices->services_type = $request->input('service_type');
                $createServices->service_description = $request->input('service_description');
                $createServices->service_duration = $request->input('service_duration');
                $createServices->save();
                return redirect('/admin/services')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/services')->with('error', 'User not found');
            }
        }

        public function editServices($id)
        {
            $editServices = Service::find($id);
            return view('admin/services_update', ['data'=>$editServices]);
        }

        public function updateServices(Request $request)
        {
            $updateServices = Service::find($request->id);
            if ($updateServices) {
                $updateServices->services_type = $request->input('type');
                $updateServices->service_description = $request->input('description');
                $updateServices->service_duration = $request->input('duration');
                $updateServices->save();
                return redirect('/admin/services')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/services')->with('error', 'User not found');
            }
        }

        public function deleteServices(Request $request, $id)
        {
            $deleteServices = Service::find($id);
            $deleteServices->delete();
            return redirect('/admin/services');
        }

        public function specificServices($id)
        {
            $specificServices = Service::find($id);

            return view('admin/services_view', ['data'=>$specificServices]);
        }

        public function viewServices(Request $request)
        {
            $updateServices = Service::find($request->id);

            if ($updateServices) {
                $updateServices->services_type = $request->input('type');
                $updateServices->service_description = $request->input('description');
                $updateServices->service_duration = $request->input('duration');
                return redirect('/admin/services')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/services')->with('error', 'User not found');
            }
        }

        // schedule routes====================================================================================
        public function schedule()
        {
            $schedules = Schedule::all();
            return view('admin/admin_schedule', compact('schedules'));
        }

        public function createSchedule(Request $request )
        {
            return view('admin/schedule_create');
        }

        public function addSchedule(Request $request)
        {
            $addSchedules = new Schedule;
            if ($addSchedules) {
                $addSchedules->date = $request->input('date');
                $addSchedules->status = $request->input('status');
                $addSchedules->save();
                return redirect('/admin/schedule')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/schedule')->with('error', 'User not found');
            }
        }

        public function updateSchedule($id)
        {
            $updateSchedule = Schedule::find($id);
            return view('admin/schedule_update', ['data'=>$updateSchedule]);
        }

        public function refreshSchedule(Request $request)
        {
            $refreshSchedule = Schedule::find($request->id);
            if ($refreshSchedule) {
                $refreshSchedule->date = $request->input('date');
                $refreshSchedule->status = $request->input('status');
                $refreshSchedule->save();
                return redirect('/admin/schedule')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/schedule')->with('error', 'User not found');
            }
        }


        // requests routes================================================================================
        public function requests()
        {
            $requests = Requests::all();
            return view("admin/admin_requests", compact('requests'));
        }

        public function approvedRequests()
        {
            $requests = Requests::all();
            return view("admin/admin_requests", compact('requests'));
        }

        public function rejectedRequests()
        {
            $requests = Requests::all();
            return view("admin/admin_requests", compact('requests'));
        }

        public function settingsRequests($id)
        {
            $settingsRequests = Requests::find($id);
            return view('admin/requests_update', ['data'=>$settingsRequests]);
        }

        public function editSettingsRequests(Request $request)
        {
            $editSettingsRequests = Requests::find($request->id);
            if ($editSettingsRequests) {
                $editSettingsRequests->id = $request->input('id');
                $editSettingsRequests->start_time = $request->input('start_time');
                $editSettingsRequests->end_time = $request->input('end_time');
                $editSettingsRequests->save();
                return redirect('/admin/requests')->with('success', 'Password updated successfully');
                // return $request->input();
            } else {
                // Redirect or return a response if the user is not found
                return redirect('/admin/requests')->with('error', 'User not found');
            }
        }


        // appointments routes============================================================================
        public function appointments()
        {
            $appointments = Appointment::all();
            return view("admin.admin_appointments", compact('appointments'));
        }

        // return view('admin.admin');
        // services routes====================================================================================
        public function services()
        {
            $services = Service::all();
            return view('admin.admin_services', compact('services'));
        }

        // public function createServices()
        // {
        //     return view('admin.services_create');
        // }


        // public function addServices(Request $request)
        // {
        //     $createServices = new Service;
        //     if ($createServices) {
        //         $createServices->services_type = $request->input('service_type');
        //         $createServices->service_description = $request->input('service_description');
        //         $createServices->service_duration = $request->input('service_duration');
        //         $createServices->save();
        //         return redirect('/admin/services')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/services')->with('error', 'User not found');
        //     }
        // }

        // public function editServices($id)
        // {
        //     $editServices = Service::find($id);
        //     return view('admin/services_update', ['data'=>$editServices]);
        // }

        // public function updateServices(Request $request)
        // {
        //     $updateServices = Service::find($request->id);
        //     if ($updateServices) {
        //         $updateServices->services_type = $request->input('type');
        //         $updateServices->service_description = $request->input('description');
        //         $updateServices->service_duration = $request->input('duration');
        //         $updateServices->save();
        //         return redirect('/admin/services')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/services')->with('error', 'User not found');
        //     }
        // }

        // public function deleteServices(Request $request, $id)
        // {
        //     $deleteServices = Service::find($id);
        //     $deleteServices->delete();
        //     return redirect('/admin/services');
        // }

        // public function specificServices($id)
        // {
        //     $specificServices = Service::find($id);

        //     return view('admin/services_view', ['data'=>$specificServices]);
        // }

        // public function viewServices(Request $request)
        // {
        //     $updateServices = Service::find($request->id);

        //     if ($updateServices) {
        //         $updateServices->services_type = $request->input('type');
        //         $updateServices->service_description = $request->input('description');
        //         $updateServices->service_duration = $request->input('duration');
        //         return redirect('/admin/services')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/services')->with('error', 'User not found');
        //     }
        // }

        // schedule routes====================================================================================
        // public function schedule()
        // {
        //     $schedules = Schedule::all();
        //     return view('admin/admin_schedule', compact('schedules'));
        // }

        // public function createSchedule(Request $request )
        // {
        //     return view('admin/schedule_create');
        // }

        // public function addSchedule(Request $request)
        // {
        //     $addSchedules = new Schedule;
        //     if ($addSchedules) {
        //         $addSchedules->date = $request->input('date');
        //         $addSchedules->status = $request->input('status');
        //         $addSchedules->save();
        //         return redirect('/admin/schedule')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/schedule')->with('error', 'User not found');
        //     }
        // }

        // public function updateSchedule($id)
        // {
        //     $updateSchedule = Schedule::find($id);
        //     return view('admin/schedule_update', ['data'=>$updateSchedule]);
        // }

        // public function refreshSchedule(Request $request)
        // {
        //     $refreshSchedule = Schedule::find($request->id);
        //     if ($refreshSchedule) {
        //         $refreshSchedule->date = $request->input('date');
        //         $refreshSchedule->status = $request->input('status');
        //         $refreshSchedule->save();
        //         return redirect('/admin/schedule')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/schedule')->with('error', 'User not found');
        //     }
        // }


        // // requests routes================================================================================
        // public function requests()
        // {
        //     $requests = Requests::all();
        //     return view("admin/admin_requests", compact('requests'));
        // }

        // public function approvedRequests()
        // {
        //     $requests = Requests::all();
        //     return view("admin/admin_requests", compact('requests'));
        // }

        // public function rejectedRequests()
        // {
        //     $requests = Requests::all();
        //     return view("admin/admin_requests", compact('requests'));
        // }

        // public function settingsRequests($id)
        // {
        //     $settingsRequests = Requests::find($id);
        //     return view('admin/requests_update', ['data'=>$settingsRequests]);
        // }

        // public function editSettingsRequests(Request $request)
        // {
        //     $editSettingsRequests = Requests::find($request->id);
        //     if ($editSettingsRequests) {
        //         $editSettingsRequests->id = $request->input('id');
        //         $editSettingsRequests->start_time = $request->input('start_time');
        //         $editSettingsRequests->end_time = $request->input('end_time');
        //         $editSettingsRequests->save();
        //         return redirect('/admin/requests')->with('success', 'Password updated successfully');
        //         // return $request->input();
        //     } else {
        //         // Redirect or return a response if the user is not found
        //         return redirect('/admin/requests')->with('error', 'User not found');
        //     }
        // }


        // appointments routes============================================================================
        // public function appointments()
        // {
        //     $appointments = Appointment::all();
        //     return view("admin/admin_appointments", compact('appointments'));
        // }
}
