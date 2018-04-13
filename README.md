###1. 添加 post方式
+ http://test.cnews.qq.com/spp/alarmUpd?callback=jquery&type=monitor
 *type:* **monitor** / **cgi**
####monitor json示例
```json
{"35319":{
    "busi_name": "145测试机",
 "qps": 1,
 "fd_num": 2,
 "memory": 3,
 "connections": 4,
 "msg_shm_time": 5,
 "recv_shm_len": 6,
 "send_shm_len": 7,
 "cover": true
    }
}
```
####cgi json示例 该json_key cgi 没有意义
```json
{
 "cgi": {  
  "busi_name": "145测试机",
        "host": "10.173.3.145",
  "cgi": "ALL",
  "qps": 5,
  "http_failure_ratio": 90,
  "rt": 500,
  "cover": false
 }
}
```
####添加页面的下拉菜单接口
+ http://test.cnews.qq.com/spp/alarmGetItem?callback=jquery&type=host&keyword=10.173.5.145
 type |  business_name | host | cgi | host_cgi |
 ------|---- 
 keyword  |  空  |  145测试机  |  145测试机  |  10.173.5.145  | 
 cgi 用于cgi查询时，host为all的情况
 type = host_cgi 用于cgi查询时，指定host的情况 
<br/>

###2. 删除 Get方式
#### Monitor
+ http://test.cnews.qq.com/spp/alarmDel?callback=jquery&type=monitor&businame=145测试机&value=35319
+ http://test.cnews.qq.com/spp/alarmDel?callback=jquery&type=monitor&businame=145测试机&value=145测试机
+ http://test.cnews.qq.com/spp/alarmDel?callback=jquery&type=monitor&businame=All&value=ALL

#### Cgi
+ http://test.cnews.qq.com/spp/alarmDel?callback=jquery&type=cgi&business_name=145测试机&host=all&cgi=/welcome


###3. 查询 Get方式
+ http://test.cnews.qq.com/spp/alarmList?callback=jquery&type=monitor
*type:* **monitor** / **cgi**
####monitor 返回json示例
```json
{"35319":{
    "id":35319,
    "host": "10.173.5.145",
    "busi_name": "145测试机",
 "qps": 1,
 "fd_num": 2,
 "memory": 3,
 "connections": 4,
 "msg_shm_time": 5,
 "recv_shm_len": 6,
 "send_shm_len": 7,
 "cover": true
    }
}
```
####cgi 返回json示例
```json
[{
  "busi_name": "145测试机",
  "level": 4,
  "qps": 10,
  "http_failure_ratio": 90,
  "rt": 500,
  "cover": true,
  "host": "10.173.5.145",
  "cgi": "/welcome"
 },
 {
  "busi_name": "ALL",
  "level": 0,
  "qps": 10000,
  "http_failure_ratio": 90,
  "rt": 500,
  "cover": true,
  "host": "ALL",
  "cgi": "ALL"
 }
]
```
<br/>

###4. 更改 post方式
 + http://test.cnews.qq.com/spp/alarmUpd?callback=jquery&type=monitor
 *type:* **monitor** / **cgi**
####monitor json示例
```json
{"35319":{
    "busi_name": "145测试机",
 "qps": 1,
 "fd_num": 2,
 "memory": 3,
 "connections": 4,
 "msg_shm_time": 5,
 "recv_shm_len": 6,
 "send_shm_len": 7,
 "cover": true
    }
}
```
####cgi json示例
```json
{
 "cgi": {  
  "busi_name": "145测试机",
        "host": "10.173.3.145",
  "cgi": "ALL",
  "qps": 5,
  "http_failure_ratio": 90,
  "rt": 500,
  "cover": false
 }
}
```
<br/>
cgi key 和 level
cgi key |  ALL  | 145测试机|10.173.5.145 | welcome | 10.173.5.145_/welcome|
------|----
level |  0  |  1  |  2  |  3  |  4  | 
说明（业务-Host-<br>Cgi）\$表示指定 | ALL-ALL-ALL | \$-ALL-ALL | \$-\$-ALL | \$-ALL-\$ | \$-\$-\$ |
<br/>
