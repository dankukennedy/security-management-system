<?php include ('config/app.php'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/account.css" rel="stylesheet" >
<!------ Include the above in your HEAD tag ---------->
<style>
  body{
    font-family: sans-serif;
  }
    
</style>

<script type="text/javascript">
    var region ={
        Ahafo:["Asunafo North Municipal"," Asunafo South","Asatifi North","Asatifi South","Asatifi South","Tano North Municipal","Tano South Municipal"],
        Ashanti:["Adansi  Asokwa","Adansi North","Adansi South","Afigya Kwabre North","Afigya Kwabre South","Ahafo Ano North Municipal","Ahafo Ano South East","Ahafo Ano South West","Akrofuom","Amansie Central","Amansie West","Amansie South","Asante Akim Central Municipal","Asante Akim North","Asante Akim South Municipal","Asokore Mampong","Asokwa Municipal","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya Municipal","Atwima Nwabiagya North","Bekwai Municipal","Bosome Freho","Bosomtwe","Ejisu Municipal","Ejura Sekyedumase Municipal","Juaben Municipal","Kumasi Metropolitan","Manhyia North","Manhyia South","Nhyiaeso","Subin","Kwabre East Municipal","Kwadaso Municipal","Mampong Municipal","Obuasi East Municipal","Obuasi Municipal","Offinso Municipal","Offinso North","Oforikrom Municipal","Old Tafo Municipal","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South","Suame Municipal"],
        Bono:["Banda","Berekum East Municipal","Berekum West","Dormaa Central Municipal","Dormaa East District","Dormaa West","Jaman North","Jaman South Municipal","Sunyani Municipal","Sunyani West","Tain","Wenchi Municipal"],
        Bono_East:["Atebubu-Amantin Municipal","Kintampo North Municipal","Kintampo South","Nkoranza North","Nkoranza South Municipal","Pru East","Pru West","Sene East","Sene West","Techiman Municipal","Techiman North"],
        Central:["Abura Asebu Kwamankese","Agona East","Agona West Municipal","Ajumako Enyan Essiam","Asikuma Odoben Brakwa","Assin Central Municipal","Assin North","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Cape Coast South","Effutu Municipal","Ekumfi","Gomoa East","Gomoa Central","Gomoa West","Komenda-Edina-Eguafo-Abirem Municipal","Mfantsiman Municipal","Twifo Atti Morkwa","Twifo/Heman/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"],
        Eastern:["Abuakwa North Municipal","Abuakwa South Municipal","Achiase","Akuapim North Municipal","Akuapim South","Akyemansa","Asene Manso Akroso","Asuogyaman","Atiwa East","Atiwa West","Ayensuano","Birim Central Municipal","Birim North","Birim South","Denkyembour","Fanteakwa North","Fanteakwa South","Kwaebibirem Municipal","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo Municipal","New Juaben North Municipal","New Juaben South Municipal","Nsawam Adoagyire Municipal","Okere","Suhum Municipal","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo Municipal",],
        Greater_Accra:["Ablekuma Central Municipal","Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Odododiodio","Okaikwei Central","Okaikwei South","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso Central Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central Municipa","Ga East Municipal","Ga North Municipal","Ga South Municipal","Domeabra-Obom","Ga West Municipal","Korle Klottey Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei North Municipal","Shai Osudoku","Tema Metropolitan","Tema East","Tema West Municipal","Weija Gbawe Municipal"],
        North_East:["Bunkpurugu Nyankpanduri","Chereponi","East Mamprusi Municipal","Mamprugu Moagduri","West Mamprusi Municipal","Yunyoo-Nasuan"],
        Northern:["Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mion","Nanton","Nanumba North Municipal","Nanumba South","Saboba","Sagnarigu Municipal","Savelugu Municipal","Tamale Metropolitan","Tamale South","Tatale Sanguli","Tolon","Yendi Municipal","Zabzugu"],
        Oti:["Biakoye","Jasikan","Kadjebi","Krachi East Municipal","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South Municipal"],
        Savannah:["Bole","Central Gonja","East Gonja Municipal","North East Gonja","North Gonja","Sawla-Tuna-Kalba","West Gonja Municipal"],
        Upper_East:["Bawku Municipal","Bawku West","Binduri","Bolgatanga East","Bolgatanga Municipal","Bongo","Builsa North Municipal","Builsa South","Garu","Kassena Nankana Municipal","Kassena Nankana West","Nabdam","Pusiga","Talensi","Tempane"],
        Upper_West:["Daffiama Bussie Issa","Jirapa Municipal","Lambussie Karni","Lawra Municipal","Nadowli Kaleo","Nandom Municipal","Sissala East Municipal","Sissala West","Wa East","Wa Municipal","Wa West"],
        Volta:["Adaklu District","Afadzato South","Agotime Ziope","Akatsi North","Akatsi South","Anloga","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Keta Municipal","Ketu North Municipal","Ketu South Municipal","Kpando Municipal","North Dayi","North Tongu","South Dayi","South Tongu"],
        Western:["Ahanta West Municipal","Amenfi Central","Amenfi West Municipal","Effia Kwesimintsim Municipal","Kwesimintsim","Ellembelle","Jomoro Municipal","Mpohor","Nzema East Municipal","Prestea-Huni Valley Municipal","Sekondi Takoradi Metropolitan","Sekondi","Takoradi","Shama","Tarkwa-Nsuaem Municipal","Wassa Amenfi East Municipal","Wassa East"],
        Western_North:["Aowin Municipal","Bia East","Bia West","Bibiani Anhwiaso Bekwai Municipal","Bodi","Juaboso","Sefwi Akontombra","Sefwi-Wiawso Municipal","Suaman"]

    }
    function makeSubmenu(value) {
        if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
        else {
            var regionOptions = "";
            for (categoryId in region[value]) {
                regionOptions += "<option>" + region[value][categoryId] + "</option>";
            }
            document.getElementById("categorySelect").innerHTML = regionOptions;
        }
    }

    function displaySelected() {
        var country = document.getElementById("category").value;
        var city = document.getElementById("categorySelect").value;
        alert(country + "\n" + city);
    }

    function resetSelection() {
        document.getElementById("category").selectedIndex = 0;
        document.getElementById("categorySelect").selectedIndex = 0;
    }

   

</script>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">DEFINT</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Create Account</h3>
                           
                            <?php  include('include/message.php'); ?>
                            <div class="form-group">

                                <input type="text" name="fName" id="fName" class="form-control" placeholder="Enter Your First Name" required>
                            </div>
                            <div class="form-group">
                              
                                <input type="text" name="lName" id="lName" class="form-control" placeholder="Enter Your Last Name" required>
                            </div>
                            <div class="form-group">
                             
                                <input type="text" name="otherName" id="otherName" class="form-control"placeholder="Enter Your Other  Name" required>
                            </div>
                            <div class="form-group">
                               
                                <input type="email" name="email" id="email" class="form-control"placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="text" name="nia" id="nia" class="form-control"placeholder="Enter Your NIA Number" required>
                            </div>
                              <div class="form-group">
                              <select name="rank" class="form-control " id="rank"  required>
                                            <option value="Select Ranks"   disabled selected>Select Ranks</option>
                                            <option value="General " >General </option>
                                            <option value="Lieutenant General" >Lieutenant General</option>
                                            <option value="Major General " >Major General </option>
                                            <option value="Colonel " >Colonell </option>
                                            <option value="Lieutenant Colonel " >Lieutenant Colonel  </option>
                                            <option value="Major  " >Major  </option>
                                            <option value="Captain " >Captain </option>
                                            <option value="Lieutenant  " >Lieutenant  </option>
                                            <option value="Second lieutenant " >Second lieutenant </option>
                                            <option value="Chief warrant officer  " >Chief warrant officer </option>
                                            <option value="Warrant Officer class I  " >Warrant Officer class I  </option>
                                            <option value="Warrant Officer II " >Warrant Officer II</option>
                                            <option value="Staff Sergeant /Sergeant major " >Staff Sergeant /Sergeant major</option>
                                            <option value="Sergeant  " >Sergeant  </option>
                                            <option value="Corporal " >Corporal  </option>
                                            <option value="Lance-corporal" >Lance-corporal</option>
                                            <option value="Private" >Private</option>

                                           
                                        </select>
                              </div >
                              <div class="form-group">
                              <select name="gender" class="form-control " id="gender"  required>
                                            <option value="Select Gender"   disabled selected>Gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>
                                                                                    
                                        </select>
                              </div>
                              <div class="form-group">
                              <select id="category" class="form-control" name="region" size="1" onchange="makeSubmenu(this.value)">
                                                <option value="" disabled selected>Region</option>
                                                <option>Ahafo</option>
                                                <option>Ashanti</option>
                                                <option>Bono</option>
                                                <option>Bono_East</option>
                                                <option>Central</option>
                                                <option>Eastern</option>
                                                <option>Greater_Accra</option>
                                                <option>North_East</option>
                                                <option>Northern</option>
                                                <option>Oti</option>
                                                <option>Savannah</option>
                                                <option>Upper_East</option>
                                                <option>Upper_West</option>
                                                <option>Volta</option>>
                                                <option>Western</option>
                                                <option>Western_North</option>

                                            </select>
                              </div>

                              <div class="form-group">
                              <select id="categorySelect" class="form-control" name="subDivision" size="1">
                                            <option value="" disabled selected>Metro/Municipal/District</option>
                                            <option></option>
                                        </select>
                              </div>

                            <div class="form-group">
                                
                                <input type="text" name="regimentalNo" id="regimentalNo" class="form-control"placeholder="Enter Your Regimental Number" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="number" name="number" id="number" class="form-control"placeholder="Enter Your Moblie Number" required>
                            </div>
                            <div class="form-group">
                                
                                <input type="password" name="password" id="password" class="form-control"placeholder="Enter Your Password" required>
                            </div>
                            <div class="form-group">
                               
                                <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Repeat Password" required>
                            </div>
                            <div class="form-group">
                                <button type="register" name="register" class="btn btn-info btn-md" >Create Account</button>
                              <i ><a href="<?php base_url('ad_login.php') ?>" class="text-right"><i style="color:orange;">All ready have Account Login here</i></a></i>
                            </div>
                            <br><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
