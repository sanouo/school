<?php


class Student {
  protected $name;
  protected $firstname;
  protected $age;
  protected $phone;
  protected $email;
  protected $address;
  protected $city;
  protected $section;
  protected $other;
  protected $mathematical;
  protected $french;
  protected $history;
  protected $english;
  protected $physical;
  protected $observation;



// function construct
  public function __construct(array $data){
    $this->hydrate($data);
  }
  // function hydrate
  public function hydrate(array $data)
  {
    foreach ($data as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (method_exists($this,$method)) {
      $this->$method($value);
      }
    }
  }



// GETTERS

    public function getName()
    {
        return $this->name;
    }



    public function getFirstname()
    {
        return $this->firstname;
    }



    public function getAge()
    {
        return $this->age;
    }



    public function getPhone()
    {
        return $this->phone;
    }


    public function getEmail()
    {
        return $this->email;
    }



    public function getAddress()
    {
        return $this->address;
    }





    public function getCity()
    {
        return $this->city;
    }




    public function getSection()
    {
        return $this->section;
    }



    public function getOther()
    {
        return $this->other;
    }




    public function getMathematical()
    {
        return $this->mathematical;
    }




    public function getFrench()
    {
        return $this->french;
    }




    public function getHistory()
    {
        return $this->history;
    }




    public function getEnglish()
    {
        return $this->english;
    }




    public function getPhysical()
    {
        return $this->physical;
    }




    public function getObservation()
    {
        return $this->observation;
    }



    // SETTERS

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }


    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }


    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }


    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }


    public function setMathematical($mathematical)
    {
        $this->mathematical = $mathematical;

        return $this;
    }


    public function setFrench($french)
    {
        $this->french = $french;

        return $this;
    }


    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }


    public function setEnglish($english)
    {
        $this->english = $english;

        return $this;
    }


    public function setPhysical($physical)
    {
        $this->physical = $physical;

        return $this;
    }


    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

}
