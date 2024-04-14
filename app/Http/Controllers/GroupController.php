<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Telegram\Bot\Api;

class GroupController extends Controller
{
    public function getAndListGroups()
    {
        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $telegram = new Api($telegramToken);

        $response = $telegram->getGroups();

        foreach ($response as $group) {
            Group::updateOrCreate(
                ['group_id' => $group['id']],
                ['name' => $group['title'], 'number_of_members' => $group['members_count']]
            );
        }

        $groups = Group::paginate(10);

        return view('list.group_list', ['groups' => $groups]);
    }

    public function List()
    {
        $groups = Group::paginate(10);

        return view('lists.group_list', ['groups' => $groups]);
    }
}
