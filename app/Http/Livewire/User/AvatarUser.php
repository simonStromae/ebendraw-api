<?php

namespace App\Http\Livewire\User;

use App\Services\UploadFilesService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AvatarUser extends Component
{
    use WithFileUploads;

    public $avatar;

    public function update_avatar_user(){
        $this->validate([
            'avatar' => 'image', // 1MB Max
        ]);

        $user = Auth::user();
        $user->avatar = UploadFilesService::saveFile($this->avatar, 'avatar', 'avatars');
        $user->save();

        notify()->success('Mise a jour de avatar avec succès', 'Mofidication profil');
        return redirect()->route('my_profile');
    }

    public function render()
    {
        return view('livewire.user.avatar-user');
    }
}
