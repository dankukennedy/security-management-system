<?php
   class LocationController
   {
    public function __construct()
    {
        $db= new DatabaseConnection;
        $this->conn=$db->conn;
    }

    
    public function index()
    {
        $locationQry="SELECT * FROM locations  order by time desc LIMIT 30";
        $result = $this->conn->query($locationQry);
        if($result->num_rows > 0)
        {
         return $result;   
        } else
          {
            return false;
          }
    }

   
    public function createLocation($inputData)
    {
        $data="'".implode("','",$inputData)."'";
        //echo $data;

        $locationQry="INSERT INTO locations(latitude,longitude,email,name) VALUES($data)";
        $result=$this->conn->query($locationQry);
       if($result)
       {
        return true;
       } else
       {
        return false;
       }
    }       

    public function delete($id)
      {
        $locationQry_id=validateInput($this->conn,$id); 
        $locationQryDeleteQuery="DELETE FROM locations WHERE id='$locationQry_id' LIMIT 1";
       $result=$this->conn->query($locationQryDeleteQuery);
       if($result)
         {
           return true;
         } 
         else
          {
            return false;
          }
 
      }
      public function update($inputData,$id)
      {
        $location_id=validateInput($this->conn,$id); 
        $latitude=$inputData['latitude'];
        $longitude=$inputData['longitude'];
        $email=$inputData['email'];     
        
        $locationUpdateQry=" UPDATE locations SET latitude='$latitude',longitude='$longitude',email='$email WHERE id='$location_id' LIMIT 1 ";
        $result =$this->conn->query($locationUpdateQry);
        if($result)
         {
          return true;
         }  else
           {
            return  false;
           }
  
  
  
      }
      public function edit($id)
      {  
        $location_id=validateInput($this->conn,$id);
        $locationQry="SELECT * FROM locations WHERE id='$location_id' LIMIT 1";
        $result=$this->conn->query($locationQry);
        if($result->num_rows == 1)
          {
           $data=$result->fetch_assoc();
           return $data;
          } else
          {
            return false;
          }
      }
   



   }





?>