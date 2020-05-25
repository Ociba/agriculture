<?php

use Illuminate\Database\Seeder;
use App\permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = ["Can view dashboard","Can view users","Can view registered users","Can search user","Can view user action",
                        "Can edit user","Can delete User","Can view employees","Can search Employees","Can add employee",
                         "Can see employees action","Can edit employee","Can delete employee","Can view profile","Can search profile",
                        "Can add profile","Can see profile action","Can edit profile","Can delete profile","Can view items","Can view products",
                        "Can search product","Can add product","Can see product action","Can edit product","Can delete product",
                        "Can view breeds","Can search breed","Can add breed","Can see breed action","Can edit breed","Can delete breed",
                        "Can view categories","Can search category","Can add category","Can see Category action","Can edit category",
                        "Can delete category","Can view feeds","Can search feeds","Can add feeds","Can see feeds action","Can edit feeds",
                         "Can delete feeds","Can view sell and buy","Can view market items","Can search items advertised","Can add item details",
                        "Can see item action","Can edit item","Can delete item","Can view doctors request form","Can search doctors request",
                        "Can request for doctor","Can see doctors request action","Can edit doctors request","Can delete doctor request",
                        "Can view standard prices","Can search prices","Can add prices","Can see price action","Can edit price","Can delete price",
                        "Can view vetenery services","Can view signs and symptoms","Can search signs and symptoms","Can add signs and symptoms",
                        "Can see signs and symptoms action","Can edit sign and symptom action","Can delete sign and symptom",
                         "Can view disease","Can search disease","Can add disease","Can see disease action","Can edit disease",
                         "Can delete disease","Can view pest","Can search pest","Can add pest","Can see pest action","Can edit pest",
                        "Can delete pest","Can view drugs","Can search drug","Can add drug","Can see drug action","Can edit drug",
                        "Can delete drug","Can view E & T","Can search E & T","Can add E & T","Can see E & T action",
                         "Can edit E & T","Can delete E & T","Can view period","Can view months","Can search month",
                        "Can add month","Can see month action","Can edit month","Can delete month","Can view weeks",
                        "Can search week","Can add week","Can see week action","Can edit week","Can delete week",
                        "Can view weight","Can search weight","Can add weight","Can see weight action","Can edit weight",
                        "Can delete weight","Can view user account","Can view register user","Can view change password","Can view Days",
                        "Can search day","Can add day","Can see day action","Can edit day","Can delete day","Can view Permit",
                         "Can view conscent","Can view conscent form","Can view front pages","Can view blog details",
                         "Can view comments","Can view messages","Can view faq","Can view farmers","Can view features",
                        "Can view feedback","Can view gallery","Can view market products","Can view news","Can view others",
                        "Can view project gallery","Can view recent news","Can view reply","Can view services","Can view we do service",
                        "Can view sponsors","Can view subscription","Can search blog details","Can add blog detail","Can see blog action",
                         "Can edit blog","Can delete blog","Can search comment","Can see comment action","Can edit comment",
                        "Can delete comment","Can search farmers","Can add farmers","Can see farmers action","Can edit farmers",
                         "Can search feature","Can add feature","Can see feature action","Can edit feature","Can delete feature",
                        "Can search feedback","Can see feedback action","Can edit feedback","Can delete feedback","Can search gallery",
                        "Can add gallery","Can see gallery action","Can delete gallery","Can search market products","Can add market products",
                        "Can see market products action","Can edit market products","Can delete market products","Can search message",
                        "Can see message action","Can delete message","Can search news","Can add news","Can see news action","Can edit news",
                         "Can delete news","Can search others","Can add others","Can see others action","Can edit others","Can delete others",
                         "Can search project gallery","Can add project gallery","Can see projeci-gallery action","Can edit project gallery",
                        "Can delete project gallery","Can search question","Can add question","Can see question action","Can edit question",
                        "Can delete question","'Can search recent","Can add recent news","Can see recent news action","Can edit recent news",
                         "Can delete recent news","Can search reply","Can add reply","Can see reply action","Can delete reply",
                        "Can search service we do","Can add service we do","Can see do action","Can edit service we do","Can delete service we do",
                         "Can search service","Can add service","Can see service action","Can edit service","Can delete service",
                        "Can search sponsor","Can add sponsor","Can see sponsor action","Can edit sponsor","Can delete sponsor",
                        "Can search subscription","Can see subscription action","Can see created by name","Can see users created by",
                         "Can see profile created by","Can see profile createdby name","Can see product createdby name","Can see breed createdby name",
                        "Can see breed createdby name","Can see breed created by","Can see Category created by name","Can see Category created by",
                         "Can see feeds created by name","Can see feeds created by","Can see signs and symptoms created by name",
                        "Can see signs and symptoms created by","Can see disease created by name","Can see disease created by",
                        "Can see pest created by name","Can see pest created by","Can see drug created by name","Can see E & T created by name",
                        "Can see E & T created by name","Can see month created by name","Can see month created","Can see week created by name",
                        "Can see day created by","Can see day created by name","Can see weight created by name","Can see weight created by",
                        "Can view farms","Can delete farms","Can edit farms","Can see farm action","Can add farm","Can search farm",
                        "Can view location","Can view counties","Can view districts","Can view sub-counties","Can delete district",
                         "Can edit district","Can see district createdby name","Can see district createdby name","Can see district action",
                         "Can see district created by","Can add district","Can search district","Can delete county","Can edit county",
                        "Can see county createdby name","Can see county action","Can see county created by","Can add county","Can search county",
                        "Can search village","Can add village","Can see village created by","Can see village action","Can edit village",
                        "Can delete village","Can view emrgency report","Can search emergency","Can add emergency",
                         "Can see emergency action","Can edit emergency","Can delete emergency"];

                    for($i=0; $i < count($permissions); $i++){
                        $permission = new permission();
                        if(permission::where("id",$i)->exists()){
                            $permission->id = $i+1;
                        }
                        else{
                            $permission->id = $i;
                        } 
                        $permission->permission=$permissions[$i];
                        $permission->save();
                    }
    }
}
