<?php

namespace App\Policies;

use App\Hotel;
use App\ProfileHotel;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfileHotelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any profile hotels.
     *
     * @param  \App\Hotel  $hotel
     * @return mixed
     */
    public function viewAny(Hotel $hotel)
    {
        //
    }

    /**
     * Determine whether the hotel can view the profile hotel.
     *
     * @param  \App\Hotel  $hotel
     * @param  \App\ProfileHotel  $profileHotel
     * @return mixed
     */
    public function view(Hotel $hotel, ProfileHotel $profileHotel)
    {
        //
    }

    /**
     * Determine whether the hotel can create profile hotels.
     *
     * @param  \App\Hotel  $hotel
     * @return mixed
     */
    public function create(Hotel $hotel)
    {
        //
    }

    /**
     * Determine whether the hotel can update the profile hotel.
     *
     * @param  \App\Hotel  $hotel
     * @param  \App\ProfileHotel  $profileHotel
     * @return mixed
     */
    public function update(Hotel $hotel, ProfileHotel $profileHotel)
    {
        return $hotel->id == $profileHotel->hotel_id;
    }

    /**
     * Determine whether the hotel can delete the profile hotel.
     *
     * @param  \App\Hotel  $hotel
     * @param  \App\ProfileHotel  $profileHotel
     * @return mixed
     */
    public function delete(Hotel $hotel, ProfileHotel $profileHotel)
    {
        //
    }

    /**
     * Determine whether the hotel can restore the profile hotel.
     *
     * @param  \App\Hotel  $hotel
     * @param  \App\ProfileHotel  $profileHotel
     * @return mixed
     */
    public function restore(Hotel $hotel, ProfileHotel $profileHotel)
    {
        //
    }

    /**
     * Determine whether the hotel can permanently delete the profile hotel.
     *
     * @param  \App\Hotel  $hotel
     * @param  \App\ProfileHotel  $profileHotel
     * @return mixed
     */
    public function forceDelete(Hotel $hotel, ProfileHotel $profileHotel)
    {
        //
    }
}
