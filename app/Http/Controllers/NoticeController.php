<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeInfo(){
        return view('admin.notice.add-notice');
    }

    public function saveNoticeInfo(Request $request){
        $noticeImage = $request->file('notice_image');
        $imageName = $noticeImage->getClientOriginalName();
        $directory = 'notice_image/';
        $imageUrl = $directory.$imageName;
        $noticeImage->move($directory, $imageName);
        $notices = new Notice();
        $notices->notice_title = $request->notice_title;
        $notices->author_name = $request->author_name;
        $notices->notice_description = $request->notice_description;
        $notices->notice_image = $imageUrl;
        $notices->publication_status = $request->publication_status;
        $notices->save();
        return redirect('/add-notice')->with('message','Notice Info Save Successfully.');

    }
    public function manageNoticeInfo(){
        $notices = Notice::all();
        return view('admin.notice.manage-notice',['notices'=>$notices]);
    }
    public function unpublishedContentInfo($id){

        $noticeById = Notice::find($id);
        $noticeById->publication_status = 0;
        $noticeById->save();
        return redirect('/manage-notice');

    }
    public function publishedContentInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status = 1;
        $noticeById->save();
        return redirect('/manage-notice');

    }
    public function viewNoticeDetailsInfo($id){
        $noticeById = Notice::find($id);
       // return $noticeById;
        return view('admin.notice.view-notice',['noticeById'=>$noticeById]);

    }
    public function deleteNoticeInfo($id){
        $noticeById= Notice::find($id);
        $noticeById->delete();
        return redirect('/manage-notice');
    }
}
