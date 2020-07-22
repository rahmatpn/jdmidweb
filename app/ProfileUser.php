<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];
    protected $appends = array('isCompleted');

    public function profileFoto(){
        return ($this->foto) ? $this->foto : 'image/user/profile/Q8QsrapijI7Y4TdaKMO08tnvcvH0p1Z8Ni9BaLdr.jpeg';
    }

    public function profileCover(){
        return ($this -> cover) ? str_replace('\\', '/', $this->cover) : 'image/user/cover/qj8MLkgRDV8E8WFk86txcFQ9guFZOZyEfRafS77D.webp';
    }

    public function userKTP(){
        return ($this->ktp) ? $this->ktp : 'image/user/ktp/1595392496.jpg';
    }

    public function userSKCK(){
        return ($this->skck) ? $this->skck : 'image/user/skck/1595392496.jpg';
    }

    public function userSertifikat(){
        return ($this->sertifikat) ? $this->sertifikat : 'image/user/sertifikat/1595392496.jpg';
    }

    public function userKartuSatpam(){
        return ($this->kartu_satpam) ? $this->kartu_satpam : 'image/user/satpam/1595392496.jpg';
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    private function isCompleted(){
        if ($this->nama_lengkap == null || $this->nomor_telepon == null || $this->tanggal_lahir == null || $this->jenis_kelamin == null ||
        $this->tinggi_badan == null || $this->berat_badan == null || $this->alamat == null || $this->social_media == null ||
        $this->pendidikan_terakhir == null || $this->foto == null || $this->cover == null || $this->status_ktp != 1 || $this->status_skck != 1){
            return false;
        }
        return true;
    }

    public function getIsCompletedAttribute(){
        return $this->isCompleted();
    }
}
