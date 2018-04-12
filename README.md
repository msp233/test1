# test1
sf 
###0 . 
###1. 添加 post方式
+ http://test.cnews.qq.com/spp/alarmUpd?callback=123&type=monitor
 *type:* **monitor** / **cgi**
####monitor json示例
```json
{"10.173.5.145":{
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
{"10.173.5.145_/test/welcome":{
 "qps": 1,
 "http_failure_ratio": 2,
 "rt": 3,
 "cover": true
    }
}
```
<br/>

###2. 删除 Get方式
#### Monitor
+ http://test.cnews.qq.com/spp/alarmDel?callback=123&type=monitor&businame=145测试机&value=35319
+ http://test.cnews.qq.com/spp/alarmDel?callback=123&type=monitor&businame=145测试机&value=145测试机
+ http://test.cnews.qq.com/spp/alarmDel?callback=123&type=monitor&businame=All&value=ALL

#### Cgi
+ http://test.cnews.qq.com/spp/alarmDel?callback=123&type=cgi&value=13231ttetetet&level=1
需要对应value和level
value |  ALL  | 145测试机|10.173.5.145 | welcome | 10.173.5.145_/welcome|
------|----
level |  0  |  1  |  2  |  3  |  4  |    
<br/>

###3. 查询 Get方式
+ http://test.cnews.qq.com/spp/alarmList?callback=123&type=monitor
*type:* **monitor** / **cgi**
####monitor 返回json示例
```json
{"10.173.5.145":{
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
{"10.173.5.145_/test/welcome":{
     "qps": 1,
     "http_failure_ratio": 2,
     "rt": 3,
     "cover": true
        },
    "ALL":{
     "qps": 1,
     "http_failure_ratio": 2,
     "rt": 3,
     "cover": true
        }
}
```
<br/>

###4. 更改 post方式
 + http://test.cnews.qq.com/spp/alarmUpd?callback=123&type=monitor
 *type:* **monitor** / **cgi**
####monitor json示例
```json
{"10.173.5.145":{
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
{"10.173.5.145_/test/welcome":{
 "qps": 1,
 "http_failure_ratio": 2,
 "rt": 3,
 "cover": true
    }
}
```
