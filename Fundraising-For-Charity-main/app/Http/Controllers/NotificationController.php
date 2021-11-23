<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminNotification(){
        $result = DB::select("SELECT notifications.notificationId, notifications.date, notifications.title,
                                    receivers.status, users.email, notifications.userId
                                    from notifications, receivers, users
                                    WHERE notifications.notificationId = receivers.notificationId
                                    AND users.userId = notifications.userId
                                    AND receivers.userId = (SELECT userId FROM users WHERE type = 'admin')");

        $data = json_decode(json_encode($result), true);

        return view('notification.adminNotification')->with('notices', $data);
    }

    public function adminReadNotice($id){
        DB::update("update receivers set status = 1 where notificationId = $id");

        $result = DB::select("SELECT * FROM notifications where notificationId = $id");

        $data = json_decode(json_encode($result), true);

        return view('notification.readNotice')->with('notices', $data);
    }

    public function adminCreateNotice(){
        $managerResult = DB::select("SELECT * FROM users where type = 'manager' and status = 1");
        $managers = json_decode(json_encode($managerResult), true);

        return view('notification.create')->with('managers', $managers);
    }

    public function adminSendNotice(NoticeRequest $request){
        $todayDate = date('Y-m-d');
        $adminId = $request->session()->get('id2');

        DB::insert("insert into notifications (title, message, userId, date)
                            values ('$request->message', '$request->title', '$adminId', '$todayDate')");

        $fetchNotificationId = DB::select("SELECT * FROM `notifications` ORDER by notificationId DESC LIMIT 1");
        $notificationInfo = json_decode(json_encode($fetchNotificationId), true);
        foreach ($notificationInfo as $notificationInformation){}

        $notificationId = $notificationInformation['notificationId'];

        $notificationReceiverStatus = 0;
        DB::insert("insert into receivers (notificationId, userId, status)
                          values ('$notificationId', '$request->managerUserId', '$notificationReceiverStatus')");

        return redirect('/admin/notice')->with('noticeSentMsg', "Notice sent successfully!");
    }

    public function checkSentNotices(){
        $adminId = session()->get('id2');

        $result = DB::select("SELECT receivers.userId, receivers.notificationId, notifications.title, users.userName, users.email, notifications.date
                                            FROM receivers, notifications, users
                                            WHERE receivers.notificationId = notifications.notificationId
                                            AND users.userId = receivers.userId
                                            AND notifications.userId = $adminId");

        $notices = json_decode(json_encode($result), true);

        return view('notification.sentNoticeList')->with('notices', $notices);
    }

    public function readSentNotice($id){
        $result = DB::select("SELECT users.userName, users.userId, email, notifications.title,
                                    notifications.message, notifications.date
                                    FROM notifications, users
                                    WHERE users.userId = notifications.userId and notificationId = $id");

        $data = json_decode(json_encode($result), true);

        return view('notification.readSentNotice')->with('notices', $data);
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
        //
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
}
