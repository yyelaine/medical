

<?php
require 'vendor/autoload.php';//include Composer goodies
$client = new MongoDB\Client("mongodb://root:fP3hALDsg7DfYDxU320cP5RpcOLvMWEbQBhSinbP@wifvirdmcufy.mongodb.sae.sina.com.cn:10303,lzcbpsjkjrtx.mongodb.sae.sina.com.cn:10303");

  $cursor = $collection->find(['title' => "个人基本健康信息登记"]);

  foreach ($cursor as $document) {
      echo $document['id'], "\n";
  }
  ?>

<?php 

  // $collection = $client->medical->users;
  // insertUsers($collection);
  // insert user_login informations 
  function insertUsers($collection){

    //insert admin datas
    	//insert doctor datas
    $insertManyResult = $collection->insertMany([
        [
       		"user_id" => "1000",
       		"password" => "admin",
       		"role" => 1,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
            	"accessDoctorInformation" => [
            		"add" => "true",
       				"delete" => "true",
          			"update" => "true",
      				"query" => "true",
      				"passwordReset" =>"true"
            	],
       		    "accessAdminInformation" => [
            		"add" => "true",
       				"delete" => "true",
          			"update" => "true",
      				"query" => "true",
      				"passwordReset" =>"true"
       		    ]
       		]
        ]
    ]);
    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

    //insert doctor datas
    $insertManyResult = $collection->insertMany([
        [
       		"user_id" => "440104000000998",
       		"password" => "doctor",
       		"role" => 2,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
            	"accessPatientInformation" => [
            		"add" => "true",
       				"delete" => "true",
          			"update" => "true",
      				"query" => "true",
            	],
       		    "accessDoctorInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]                
       		]
        ],
        [
            "user_id" => "440104000000999", 
       		"password" => "doctor",
       		"role" => 2,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
            	"accessPatientInformation" => [
            		"add" => "true",
       				"delete" => "true",
          			"update" => "true",
      				"query" => "true",
            	],
       		    "accessDoctorInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]                
       		]    
       	]
    ]);

    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());


    //insert patient datas
    $insertManyResult = $collection->insertMany([
        [
            "user_id" => "44182711222200001", 
            "password" => "123456", 
            "role" => 3,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]        
       		]
        ],
        [
            "user_id" => "44182711222200002", 
            "password" => "123456", 
            "role" => 3,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]        
       		]
        ],
        [
            "user_id" => "44182711222200003", 
            "password" => "123456", 
            "role" => 3,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]        
       		]
        ],
        [
            "user_id" => "44182711222200004", 
            "password" => "123456", 
            "role" => 3,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]        
       		]
        ],
        [
            "user_id" => "44182711222200005", 
            "password" => "123456", 
            "role" => 3,
            "access" => [
            	"accessPersonalInformation" => ["query" => "true"],
       		    "viewRecords" => ["query" => "true"]        
       		]
        ]
    ]);


    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
  }

  // $collection = $client->medical->doctor_info;
  // insertDoctorsInfo($collection);
  //插入医生的基本信息
  function insertDoctorsInfo($collection){
    $insertManyResult = $collection->insertMany([
        [
          "title" => "医生基本信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "id" => "440104000000998",
          "name" => "王医生",
          "administrativeGender" => "男",
          "representedOrganization" => [
              "id" => "患者就诊的医疗机构标识",
              "name" => "广东省中医院大学城医院",
              "address" => "广东省广州市番禺区大学城内环西路55号"
          ],
          "telecom" => "1866595458",
          "mailBox" => "962509645@qq.com",
          "regionalAuthority" => [
              [
                  "regionalCode" => "441600000000",
                  "regionalName" => "广东省河源市"
              ],
              [
                  "regionalCode" => "44142000000",
                  "regionalName" => "广东省梅州市丰顺县"
              ],          
          ],

        ],
        [
          "title" => "医生基本信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "id" => "440104000000999",
          "name" => "于医生",
          "administrativeGender" => "女",
          "representedOrganization" => [
              "id" => "患者就诊的医疗机构标识",
              "name" => "广东省中医院大学城医院",
              "address" => "广东省广州市番禺区大学城内环西路55号"
          ],
          "telecom" => "18925161686",
          "mailBox" => "96250927@qq.com",
          "regionalAuthority" => [
              [
                  "regionalCode" => "441600000000",
                  "regionalName" => "广东省河源市"
              ],
              [
                  "regionalCode" => "44142000000",
                  "regionalName" => "广东省梅州市丰顺县"
              ],          
          ],

        ]        
    ]);

    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
  }

  // $collection = $client->medical->patient_info;
  // $collection->drop();
  // insertpatientsInfo($collection);
  //插入病人的基本信息
  function insertpatientsInfo($collection){
    $insertManyResult = $collection->insertMany([
        [
          "realmCode" => "CN",
          "title" => "个人基本健康信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "languageCode" => "zh-CN",
          "setID" => "1",
          "versionNumber" => "1.0",
          "id" => "44182711222200001",
          
          "patient" => [
              "id" => "440127195310096010",
              "name" => "邱琪",
              "administrativeGender" => "男",
              "birthTime" => "1994-01-01",
              "maritalStatus" => "未婚",
              "ethnicGroup" => "汉族",
              "employerOrganization" => "不详",
              "household" => "户籍",
              "educationalLevel" => "本科",
              "occupation" => "程序员",

              "address" => [
                "houseNumber" => "10号光明小区01栋22单元",
                "streetName" => "光明大道",
                "village" => "西谭村",
                "township" => "龙颈镇",
                "county" => "清远县",
                "city" => "广州市",
                "state" => "广东省",
                "postcode" => "514000"
              ],
              "telecom" => "010-87815102"
          ],

          "author" => [
              "time" => "2017-01-17T03:03:37.312Z",
              "id" => "440104000000998",
              "assignedPerson" => "王医生",
              "representedOrganization" => [
                "id" => "患者就诊的医疗机构标识",
                "name" => "广东省中医院大学城医院",
                "address" => "广东省广州市番禺区大学城内环西路55号"
              ]
          ],
          
          "custodian" => [
            "id" => "文档保管的医疗机构标识",
            "name" => "保管机构名称",
            "telecom" => "保管机构电话",
            "address" => "保管机构地址"
          ],
          
          "participant" => [
            "telecom" => "010-87815124",
            "name" => "邱琪父"
          ],

          "relatedDocument" => [
            "parentDocument" => [
              "id" => "44182711222200000",
              "setId" => "1",
              "versionNumber" => "1.0"
            ]
          ],
          
          "laboratoryInspect" => [
            "text" => "实验室检查章节人读部分",
            "bloodType" => [
              "organizer" => "血型组合",
              "statusCode" => "状态标志",
              "ABOType" => "ABO血型名称", 
              "RhType" => "Rh血型名称", 
            ]
          ],
            
          "fee" => [
            "text" => "费用章节人读部分",
            "value" => "新型农村合作医疗"
          ],

          "allergicHistory" => [
            "text" => "过敏史章节人读部分",
            "allergicEntry" => [
              [
                "value" => "花粉",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ],
              [
                "value" => "海鲜",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ]
            ]
          ],
            
          "occupationalExposureHistory" => [
            "text" => "职业暴露史章节人读部分",
            "occupationalExposure" => [
              "环境危险因素暴露名称",
              "环境危险因素暴露名称"
            ]
          ],
            
          "historyOfPastIllness" => [
            "text" => "既往史章节人读部分",
            "pastDisease" => [
              [
                "value" => "荨麻疹",
                "effectiveTime" => "既往疾病确诊日期"
              ],
              [
                "value" => "哮喘",
                "effectiveTime" => "既往疾病确诊日期"
              ]
            ],
            "pastOperation" => [
              [
                "value" => "阑尾炎手术",
                "effectiveTime" => "手术时间"
              ],
              [
                "value" => "扁桃体摘除手术",
                "effectiveTime" => "手术时间"
              ]
            ],
            "pastTrauma" => [
              [
                "value" => "腿骨骨折",
                "effectiveTime" => "骨折外伤时间"
              ],
              [
                "value" => "破伤风",
                "effectiveTime" => "破伤风外伤时间"
              ]
            ],
            "pastTransfusiona" => [
              [
                "value" => "输血原因一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "输血原因二",
                "effectiveTime" => "时间"
              ]
            ] 
          ],
            
          "familyHistory" => [
            "text" => "家族史章节人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfGeneticDisease" => [
            "text" => "遗传病史人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfDisability" => [
            "text" => "残疾史人读部分",
            "disability" => [
              [
                "value" => "残疾情况名称一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "残疾情况名称二",
                "effectiveTime" => "时间"
              ]
            ]
          ],
            
          "housholdEnvironment" => [
            "text" => "生活环境人读部分",
            "ventilationOfKitchen" => "家庭厨房排风设施名称",
            "householdFuel" => "家庭燃料类型名称",
            "householdDrinking" => "家庭饮水类型名称",
            "householdToilet" => "家庭厕所类型名称",
            "householdLivestock" => "家庭禽畜栏类型名称"
          ] 
        ],
        [
          "realmCode" => "CN",
          "title" => "个人基本健康信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "languageCode" => "zh-CN",
          "setID" => "1",
          "versionNumber" => "1.0",
          "id" => "44182711222200002",
          
          "patient" => [
              "id" => "441827196404136048",
              "name" => "谢金",
              "administrativeGender" => "男",
              "birthTime" => "1994-02-02",
              "maritalStatus" => "未婚",
              "ethnicGroup" => "汉族",
              "employerOrganization" => "不详",
              "household" => "户籍",
              "educationalLevel" => "本科",
              "occupation" => "程序员",

              "address" => [
                "houseNumber" => "10号光明小区01栋22单元",
                "streetName" => "光明大道",
                "village" => "西谭村",
                "township" => "龙颈镇",
                "county" => "清远县",
                "city" => "广州市",
                "state" => "广东省",
                "postcode" => "514000"
              ],
              "telecom" => "010-87815106"
          ],

          "author" => [
              "time" => "2017-01-17T03:03:37.312Z",
              "id" => "440104000000998",
              "assignedPerson" => "王医生",
              "representedOrganization" => [
                "id" => "患者就诊的医疗机构标识",
                "name" => "广东省中医院大学城医院",
                "address" => "广东省广州市番禺区大学城内环西路55号"
              ]
          ],
          
          "custodian" => [
            "id" => "文档保管的医疗机构标识",
            "name" => "保管机构名称",
            "telecom" => "保管机构电话",
            "address" => "保管机构地址"
          ],
          
          "participant" => [
            "telecom" => "010-87815674",
            "name" => "谢金父"
          ],

          "relatedDocument" => [
            "parentDocument" => [
              "id" => "44182711222200000",
              "setId" => "1",
              "versionNumber" => "1.0"
            ]
          ],
          
          "laboratoryInspect" => [
            "text" => "实验室检查章节人读部分",
            "bloodType" => [
              "organizer" => "血型组合",
              "statusCode" => "状态标志",
              "ABOType" => "ABO血型名称", 
              "RhType" => "Rh血型名称", 
            ]
          ],
            
          "fee" => [
            "text" => "费用章节人读部分",
            "value" => "新型农村合作医疗"
          ],

          "allergicHistory" => [
            "text" => "过敏史章节人读部分",
            "allergicEntry" => [
              [
                "value" => "花粉",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ],
              [
                "value" => "海鲜",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ]
            ]
          ],
            
          "occupationalExposureHistory" => [
            "text" => "职业暴露史章节人读部分",
            "occupationalExposure" => [
              "环境危险因素暴露名称",
              "环境危险因素暴露名称"
            ]
          ],
            
          "historyOfPastIllness" => [
            "text" => "既往史章节人读部分",
            "pastDisease" => [
              [
                "value" => "荨麻疹",
                "effectiveTime" => "既往疾病确诊日期"
              ],
              [
                "value" => "哮喘",
                "effectiveTime" => "既往疾病确诊日期"
              ]
            ],
            "pastOperation" => [
              [
                "value" => "阑尾炎手术",
                "effectiveTime" => "手术时间"
              ],
              [
                "value" => "扁桃体摘除手术",
                "effectiveTime" => "手术时间"
              ]
            ],
            "pastTrauma" => [
              [
                "value" => "腿骨骨折",
                "effectiveTime" => "骨折外伤时间"
              ],
              [
                "value" => "破伤风",
                "effectiveTime" => "破伤风外伤时间"
              ]
            ],
            "pastTransfusiona" => [
              [
                "value" => "输血原因一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "输血原因二",
                "effectiveTime" => "时间"
              ]
            ] 
          ],
            
          "familyHistory" => [
            "text" => "家族史章节人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfGeneticDisease" => [
            "text" => "遗传病史人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfDisability" => [
            "text" => "残疾史人读部分",
            "disability" => [
              [
                "value" => "残疾情况名称一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "残疾情况名称二",
                "effectiveTime" => "时间"
              ]
            ]
          ],
            
          "housholdEnvironment" => [
            "text" => "生活环境人读部分",
            "ventilationOfKitchen" => "家庭厨房排风设施名称",
            "householdFuel" => "家庭燃料类型名称",
            "householdDrinking" => "家庭饮水类型名称",
            "householdToilet" => "家庭厕所类型名称",
            "householdLivestock" => "家庭禽畜栏类型名称"
          ] 
        ],
        [
          "realmCode" => "CN",
          "title" => "个人基本健康信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "languageCode" => "zh-CN",
          "setID" => "1",
          "versionNumber" => "1.0",
          "id" => "44182711222200003",
          
          "patient" => [
              "id" => "441827198608026034",
              "name" => "王老吉",
              "administrativeGender" => "男",
              "birthTime" => "1994-03-03",
              "maritalStatus" => "未婚",
              "ethnicGroup" => "汉族",
              "employerOrganization" => "不详",
              "household" => "户籍",
              "educationalLevel" => "本科",
              "occupation" => "程序员",

              "address" => [
                "houseNumber" => "10号光明小区01栋22单元",
                "streetName" => "光明大道",
                "village" => "西谭村",
                "township" => "龙颈镇",
                "county" => "清远县",
                "city" => "广州市",
                "state" => "广东省",
                "postcode" => "514000"
              ],
              "telecom" => "010-87815102"
          ],

          "author" => [
              "time" => "2017-01-17T03:03:37.312Z",
              "id" => "440104000000998",
              "assignedPerson" => "王医生",
              "representedOrganization" => [
                "id" => "患者就诊的医疗机构标识",
                "name" => "广东省中医院大学城医院",
                "address" => "广东省广州市番禺区大学城内环西路55号"
              ]
          ],
          
          "custodian" => [
            "id" => "文档保管的医疗机构标识",
            "name" => "保管机构名称",
            "telecom" => "保管机构电话",
            "address" => "保管机构地址"
          ],
          
          "participant" => [
            "telecom" => "010-87815124",
            "name" => "王老吉父"
          ],

          "relatedDocument" => [
            "parentDocument" => [
              "id" => "44182711222200000",
              "setId" => "1",
              "versionNumber" => "1.0"
            ]
          ],
          
          "laboratoryInspect" => [
            "text" => "实验室检查章节人读部分",
            "bloodType" => [
              "organizer" => "血型组合",
              "statusCode" => "状态标志",
              "ABOType" => "ABO血型名称", 
              "RhType" => "Rh血型名称", 
            ]
          ],
            
          "fee" => [
            "text" => "费用章节人读部分",
            "value" => "新型农村合作医疗"
          ],

          "allergicHistory" => [
            "text" => "过敏史章节人读部分",
            "allergicEntry" => [
              [
                "value" => "花粉",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ],
              [
                "value" => "海鲜",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ]
            ]
          ],
            
          "occupationalExposureHistory" => [
            "text" => "职业暴露史章节人读部分",
            "occupationalExposure" => [
              "环境危险因素暴露名称",
              "环境危险因素暴露名称"
            ]
          ],
            
          "historyOfPastIllness" => [
            "text" => "既往史章节人读部分",
            "pastDisease" => [
              [
                "value" => "荨麻疹",
                "effectiveTime" => "既往疾病确诊日期"
              ],
              [
                "value" => "哮喘",
                "effectiveTime" => "既往疾病确诊日期"
              ]
            ],
            "pastOperation" => [
              [
                "value" => "阑尾炎手术",
                "effectiveTime" => "手术时间"
              ],
              [
                "value" => "扁桃体摘除手术",
                "effectiveTime" => "手术时间"
              ]
            ],
            "pastTrauma" => [
              [
                "value" => "腿骨骨折",
                "effectiveTime" => "骨折外伤时间"
              ],
              [
                "value" => "破伤风",
                "effectiveTime" => "破伤风外伤时间"
              ]
            ],
            "pastTransfusiona" => [
              [
                "value" => "输血原因一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "输血原因二",
                "effectiveTime" => "时间"
              ]
            ] 
          ],
            
          "familyHistory" => [
            "text" => "家族史章节人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfGeneticDisease" => [
            "text" => "遗传病史人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfDisability" => [
            "text" => "残疾史人读部分",
            "disability" => [
              [
                "value" => "残疾情况名称一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "残疾情况名称二",
                "effectiveTime" => "时间"
              ]
            ]
          ],
            
          "housholdEnvironment" => [
            "text" => "生活环境人读部分",
            "ventilationOfKitchen" => "家庭厨房排风设施名称",
            "householdFuel" => "家庭燃料类型名称",
            "householdDrinking" => "家庭饮水类型名称",
            "householdToilet" => "家庭厕所类型名称",
            "householdLivestock" => "家庭禽畜栏类型名称"
          ] 
        ],
        [
          "realmCode" => "CN",
          "title" => "个人基本健康信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "languageCode" => "zh-CN",
          "setID" => "1",
          "versionNumber" => "1.0",
          "id" => "44182711222200004",
          
          "patient" => [
              "id" => "440127195310096112",
              "name" => "和其正",
              "administrativeGender" => "男",
              "birthTime" => "1994-04-04",
              "maritalStatus" => "未婚",
              "ethnicGroup" => "汉族",
              "employerOrganization" => "不详",
              "household" => "户籍",
              "educationalLevel" => "本科",
              "occupation" => "程序员",

              "address" => [
                "houseNumber" => "10号光明小区01栋22单元",
                "streetName" => "光明大道",
                "village" => "西谭村",
                "township" => "龙颈镇",
                "county" => "清远县",
                "city" => "广州市",
                "state" => "广东省",
                "postcode" => "514000"
              ],
              "telecom" => "010-87815102"
          ],

          "author" => [
              "time" => "2017-01-17T03:03:37.312Z",
              "id" => "440104000000998",
              "assignedPerson" => "王医生",
              "representedOrganization" => [
                "id" => "患者就诊的医疗机构标识",
                "name" => "广东省中医院大学城医院",
                "address" => "广东省广州市番禺区大学城内环西路55号"
              ]
          ],
          
          "custodian" => [
            "id" => "文档保管的医疗机构标识",
            "name" => "保管机构名称",
            "telecom" => "保管机构电话",
            "address" => "保管机构地址"
          ],
          
          "participant" => [
            "telecom" => "010-87815124",
            "name" => "和其正父"
          ],

          "relatedDocument" => [
            "parentDocument" => [
              "id" => "44182711222200000",
              "setId" => "1",
              "versionNumber" => "1.0"
            ]
          ],
          
          "laboratoryInspect" => [
            "text" => "实验室检查章节人读部分",
            "bloodType" => [
              "organizer" => "血型组合",
              "statusCode" => "状态标志",
              "ABOType" => "ABO血型名称", 
              "RhType" => "Rh血型名称", 
            ]
          ],
            
          "fee" => [
            "text" => "费用章节人读部分",
            "value" => "新型农村合作医疗"
          ],

          "allergicHistory" => [
            "text" => "过敏史章节人读部分",
            "allergicEntry" => [
              [
                "value" => "花粉",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ],
              [
                "value" => "海鲜",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ]
            ]
          ],
            
          "occupationalExposureHistory" => [
            "text" => "职业暴露史章节人读部分",
            "occupationalExposure" => [
              "环境危险因素暴露名称",
              "环境危险因素暴露名称"
            ]
          ],
            
          "historyOfPastIllness" => [
            "text" => "既往史章节人读部分",
            "pastDisease" => [
              [
                "value" => "荨麻疹",
                "effectiveTime" => "既往疾病确诊日期"
              ],
              [
                "value" => "哮喘",
                "effectiveTime" => "既往疾病确诊日期"
              ]
            ],
            "pastOperation" => [
              [
                "value" => "阑尾炎手术",
                "effectiveTime" => "手术时间"
              ],
              [
                "value" => "扁桃体摘除手术",
                "effectiveTime" => "手术时间"
              ]
            ],
            "pastTrauma" => [
              [
                "value" => "腿骨骨折",
                "effectiveTime" => "骨折外伤时间"
              ],
              [
                "value" => "破伤风",
                "effectiveTime" => "破伤风外伤时间"
              ]
            ],
            "pastTransfusiona" => [
              [
                "value" => "输血原因一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "输血原因二",
                "effectiveTime" => "时间"
              ]
            ] 
          ],
            
          "familyHistory" => [
            "text" => "家族史章节人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfGeneticDisease" => [
            "text" => "遗传病史人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfDisability" => [
            "text" => "残疾史人读部分",
            "disability" => [
              [
                "value" => "残疾情况名称一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "残疾情况名称二",
                "effectiveTime" => "时间"
              ]
            ]
          ],
            
          "housholdEnvironment" => [
            "text" => "生活环境人读部分",
            "ventilationOfKitchen" => "家庭厨房排风设施名称",
            "householdFuel" => "家庭燃料类型名称",
            "householdDrinking" => "家庭饮水类型名称",
            "householdToilet" => "家庭厕所类型名称",
            "householdLivestock" => "家庭禽畜栏类型名称"
          ] 
        ],
        [
          "realmCode" => "CN",
          "title" => "个人基本健康信息登记",
          "effectiveTime" => "2017-01-17T03:03:37.312Z",
          "languageCode" => "zh-CN",
          "setID" => "1",
          "versionNumber" => "1.0",
          "id" => "44182711222200005",
          
          "patient" => [
              "id" => "440127195310096020",
              "name" => "杨梅汁",
              "administrativeGender" => "女",
              "birthTime" => "1994-05-05",
              "maritalStatus" => "未婚",
              "ethnicGroup" => "汉族",
              "employerOrganization" => "不详",
              "household" => "户籍",
              "educationalLevel" => "本科",
              "occupation" => "程序员",

              "address" => [
                "houseNumber" => "10号光明小区01栋22单元",
                "streetName" => "光明大道",
                "village" => "西谭村",
                "township" => "龙颈镇",
                "county" => "清远县",
                "city" => "广州市",
                "state" => "广东省",
                "postcode" => "514000"
              ],
              "telecom" => "010-87815102"
          ],

          "author" => [
              "time" => "2017-01-17T03:03:37.312Z",
              "id" => "440104000000998",
              "assignedPerson" => "王医生",
              "representedOrganization" => [
                "id" => "患者就诊的医疗机构标识",
                "name" => "广东省中医院大学城医院",
                "address" => "广东省广州市番禺区大学城内环西路55号"
              ]
          ],
          
          "custodian" => [
            "id" => "文档保管的医疗机构标识",
            "name" => "保管机构名称",
            "telecom" => "保管机构电话",
            "address" => "保管机构地址"
          ],
          
          "participant" => [
            "telecom" => "010-87815124",
            "name" => "杨梅汁父"
          ],

          "relatedDocument" => [
            "parentDocument" => [
              "id" => "44182711222200000",
              "setId" => "1",
              "versionNumber" => "1.0"
            ]
          ],
          
          "laboratoryInspect" => [
            "text" => "实验室检查章节人读部分",
            "bloodType" => [
              "organizer" => "血型组合",
              "statusCode" => "状态标志",
              "ABOType" => "ABO血型名称", 
              "RhType" => "Rh血型名称", 
            ]
          ],
            
          "fee" => [
            "text" => "费用章节人读部分",
            "value" => "新型农村合作医疗"
          ],

          "allergicHistory" => [
            "text" => "过敏史章节人读部分",
            "allergicEntry" => [
              [
                "value" => "花粉",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ],
              [
                "value" => "海鲜",
                "text" => "过敏源人读部分",
                "effectTime" => "过敏发生时间"
              ]
            ]
          ],
            
          "occupationalExposureHistory" => [
            "text" => "职业暴露史章节人读部分",
            "occupationalExposure" => [
              "环境危险因素暴露名称",
              "环境危险因素暴露名称"
            ]
          ],
            
          "historyOfPastIllness" => [
            "text" => "既往史章节人读部分",
            "pastDisease" => [
              [
                "value" => "荨麻疹",
                "effectiveTime" => "既往疾病确诊日期"
              ],
              [
                "value" => "哮喘",
                "effectiveTime" => "既往疾病确诊日期"
              ]
            ],
            "pastOperation" => [
              [
                "value" => "阑尾炎手术",
                "effectiveTime" => "手术时间"
              ],
              [
                "value" => "扁桃体摘除手术",
                "effectiveTime" => "手术时间"
              ]
            ],
            "pastTrauma" => [
              [
                "value" => "腿骨骨折",
                "effectiveTime" => "骨折外伤时间"
              ],
              [
                "value" => "破伤风",
                "effectiveTime" => "破伤风外伤时间"
              ]
            ],
            "pastTransfusiona" => [
              [
                "value" => "输血原因一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "输血原因二",
                "effectiveTime" => "时间"
              ]
            ] 
          ],
            
          "familyHistory" => [
            "text" => "家族史章节人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfGeneticDisease" => [
            "text" => "遗传病史人读部分",
            "value" => [
              "癫痫",
              "小儿麻痹"
            ]
          ],
            
          "historyOfDisability" => [
            "text" => "残疾史人读部分",
            "disability" => [
              [
                "value" => "残疾情况名称一",
                "effectiveTime" => "时间"
              ],
              [
                "value" => "残疾情况名称二",
                "effectiveTime" => "时间"
              ]
            ]
          ],
            
          "housholdEnvironment" => [
            "text" => "生活环境人读部分",
            "ventilationOfKitchen" => "家庭厨房排风设施名称",
            "householdFuel" => "家庭燃料类型名称",
            "householdDrinking" => "家庭饮水类型名称",
            "householdToilet" => "家庭厕所类型名称",
            "householdLivestock" => "家庭禽畜栏类型名称"
          ] 
        ]       
    ]);

    printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());
  }
?>