<?php

namespace App\Http\Resources;


use App\Dynamics\Interfaces\iCountry;
use App\Dynamics\Interfaces\iDistrict;
use App\Dynamics\Interfaces\iRegion;
use App\Dynamics\Interfaces\iSchool;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{

    private $school;
    private $district;
    private $region;
    private $country;

    public function __construct($resource, iSchool $school, iDistrict $district, iRegion $region, iCountry $country)
    {
        parent::__construct($resource);
        $this->school   = $school;
        $this->district = $district;
        $this->region   = $region;
        $this->country  = $country;

    }


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
          'id'                                     =>  $this['id'],
          'federated_id'                           =>  $this['federated_id'],
          'first_name'                             =>  $this['first_name'],
          'preferred_first_name'                   =>  $this['preferred_first_name'],
          'last_name'                              =>  $this['last_name'],
          'email'                                  =>  $this['email'],
          'phone'                                  =>  $this['phone'],
          'is_SIN_on_file'                         =>  (boolean) ($this['social_insurance_number'] > 0),
          'address_1'                              =>  $this['address_1'],
          'address_2'                              =>  $this['address_2'],
          'city'                                   =>  $this['city'],
          'region'                                 =>  $this['region'] ? new SimpleResource($this->region->get($this['region'])) : null,
          'postal_code'                            =>  $this['postal_code'],
          'district'                               =>  $this['district_id'] ? new SimpleResource($this->district->get($this['district_id'])) : null,
          'school'                                 =>  $this['school_id'] ? new SchoolResource($this->school->get($this['school_id'])) : null,
          'country'                                =>  $this['country_id'] ? new SimpleResource($this->country->get($this['country_id'])) : null,
          'professional_certificate_bc'            =>  $this['professional_certificate_bc'],
          'professional_certificate_yk'            =>  $this['professional_certificate_yk'],
        ];
    }
}
