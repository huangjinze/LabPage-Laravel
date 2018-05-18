<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\JobOpening;
use App\Models\Member;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Reward;
use App\Models\SocialActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $group = Group::paginate(1);
        return view('welcome')->with('group', $group[0]);
    }


    public function memberIndex($role)
    {
        $datas = Member::where([['type', $role], ['status', '在团队中']])->paginate(6);
        return view('teachers')->with('datas', $datas);
    }

    public function memberShowIndex($role, $id)
    {
        $data = Member::where('id', $id)->firstOrFail();
        return view('singleInfo')->with('data', $data);
    }

    public function projectIndex()
    {
        $projects = Project::paginate(1);
        return view('projects')->with('projects', $projects);
    }

    public function publicationIndex()
    {
        $publications = Publication::orderBy('type')->paginate(1);
        return view('publications')->with('publications', $publications);
    }
    public function rewardIndex()
    {
        $rewards = Reward::paginate(1);
        return view('rewards')->with('rewards', $rewards);
    }
    public function jobIndex()
    {
        $jobs = JobOpening::paginate(1);
        return view('job')->with('jobs', $jobs);
    }
    public function activitiesIndex()
    {
        $activities = SocialActivity::paginate(1);
        return view('activities')->with('activities', $activities);
    }
    public function contactIndex()
    {
        $contact = Group::paginate(1);
        return view('contacts')->with('contact', $contact[0]);
    }


}


