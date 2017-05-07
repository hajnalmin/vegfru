/**
 * Created by zhm on 17/4/19.
 */
var menu = [
    {
        "id": "1",
        "name": "用户管理",
        "parentId": "0",
        "url": "",
        "icon": "",
        "order": "1",
        "isHeader": "1",
        "childMenus":[
            {
                "id": "5",
                "name": "管理员",
                "parentId": "1",
                "url": "",
                "icon": "&#xe604;",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "11",
                        "name": "新增管理员",
                        "parentId": "5",
                        "url": "admin_add.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    },
                    {
                        "id": "12",
                        "name": "管理员列表",
                        "parentId": "5",
                        "url": "admin_list.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    },
                    {
                        "id": "13",
                        "name": "修改密码",
                        "parentId": "5",
                        "url": "admin_update.php",
                        "icon": "",
                        "order": "2",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            },
            {
                "id": "6",
                "name": "注册用户",
                "parentId": "1",
                "url": "",
                "icon": "&#xe602;",
                "order": "2",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "14",
                        "name": "注册用户列表",
                        "parentId": "6",
                        "url": "user_list.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            }
        ]
    },
    {
        "id": "2",
        "name": "商品管理",
        "parentId": "0",
        "url": "",
        "icon": "",
        "order": "2",
        "isHeader": "1",
        "childMenus": [
            {
                "id": "7",
                "name": "商品分类",
                "parentId": "2",
                "url": "",
                "icon": "",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "15",
                        "name": "新增商品分类",
                        "parentId": "7",
                        "url": "proCate_add.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    },
                    {
                        "id": "16",
                        "name": "商品分类列表",
                        "parentId": "7",
                        "url": "proCate_list.php",
                        "icon": "",
                        "order": "2",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            },
            {
                "id": "8",
                "name": "商品信息",
                "parentId": "2",
                "url": "",
                "icon": "",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "17",
                        "name": "新增商品信息",
                        "parentId": "8",
                        "url": "proInfo_add.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    },
                    {
                        "id": "18",
                        "name": "商品信息列表",
                        "parentId": "8",
                        "url": "proInfo_list.php",
                        "icon": "",
                        "order": "2",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            },
            {
                "id": "9",
                "name": "商品评论",
                "parentId": "2",
                "url": "",
                "icon": "",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "19",
                        "name": "商品评论列表",
                        "parentId": "8",
                        "url": "proComment_list.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            }
        ]
    },
    {
        "id": "3",
        "name": "资讯",
        "parentId": "0",
        "url": "",
        "icon": "",
        "order": "3",
        "isHeader": "1",
        "childMenus": [
            {
                "id": "10",
                "name": "资讯信息",
                "parentId": "3",
                "url": "",
                "icon": "",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "20",
                        "name": "新增资讯信息",
                        "parentId": "10",
                        "url": "news_add.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    },
                    {
                        "id": "21",
                        "name": "资讯信息列表",
                        "parentId": "10",
                        "url": "news_list.php",
                        "icon": "",
                        "order": "2",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            }
        ]
    },
    {
        "id": "4",
        "name": "订单",
        "parentId": "0",
        "url": "",
        "icon": "",
        "order": "4",
        "isHeader": "1",
        "childMenus": [
            {
                "id": "11",
                "name": "订单信息",
                "parentId": "4",
                "url": "",
                "icon": "",
                "order": "1",
                "isHeader": "0",
                "childMenus": [
                    {
                        "id": "22",
                        "name": "订单信息列表",
                        "parentId": "4",
                        "url": "order_list.php",
                        "icon": "",
                        "order": "1",
                        "isHeader": "0",
                        "childMenus": ""
                    }
                ]
            }
        ]
    }
];