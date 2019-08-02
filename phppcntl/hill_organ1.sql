-- MySQL dump 10.13  Distrib 5.7.17, for osx10.12 (x86_64)
--
-- Host: rm-2ze5l4cw0vxi6ajbiqo.mysql.rds.aliyuncs.com    Database: hill_organ
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED='d7d18ac8-db49-11e8-838f-00163e12203e:1-21898256';

--
-- Table structure for table `t_organ_register_system`
--

DROP TABLE IF EXISTS `t_organ_register_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_organ_register_system` (
  `system_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '系统id',
  `system_name` varchar(64) NOT NULL DEFAULT '' COMMENT '系统名称',
  `system_code` varchar(32) NOT NULL DEFAULT '' COMMENT '系统编码',
  `system_type` int(11) NOT NULL DEFAULT '2' COMMENT '系统类型 1 管理型 2 业务型',
  `issue` int(3) NOT NULL COMMENT '是否发布 10 未发布 20 发布',
  `status` int(3) NOT NULL COMMENT '是否停用 10 停用 20 启用',
  `type` int(3) NOT NULL COMMENT '注册类型  10 全局 20组织',
  `operator_id` int(11) NOT NULL COMMENT '操作人id',
  `operator_name` varchar(32) NOT NULL DEFAULT '' COMMENT '操作人姓名',
  `is_del` int(3) DEFAULT '0' COMMENT '是否删除 0 未删除 1 删除',
  `add_time` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `last_modify` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  PRIMARY KEY (`system_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COMMENT='注册系统表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_organ_register_system`
--

LOCK TABLES `t_organ_register_system` WRITE;
/*!40000 ALTER TABLE `t_organ_register_system` DISABLE KEYS */;
INSERT INTO `t_organ_register_system` VALUES (1,'管理型','123',1,20,20,10,1,'1',0,'2018-05-03 12:45:34','2018-05-03 12:45:34'),(2,'暖_主数据-总部端','8wcbc2rgu251a496',2,20,20,20,1,'超级管理员',0,'2018-07-23 20:11:55','2019-01-29 14:43:55'),(3,'集采-采购平台','eyqk9pz9ripxtv2d',2,20,20,20,1,'超级管理员',0,'2018-07-23 20:12:05','2018-07-23 21:06:47'),(4,'系统配置','aq7jxb1c39958iep',2,20,20,10,1,'李发钰',0,'2018-12-03 13:38:00','2018-12-03 16:11:13'),(5,'系统配置2','sbl4ec5z3de5j8y3',2,10,20,10,1,'李发钰',1,'2018-12-03 15:29:25','2018-12-03 17:05:18'),(6,'子龙客户端','x98gf3rrk7nryc1o',2,20,20,10,1,'李发钰',0,'2018-12-03 17:04:29','2018-12-04 10:52:44'),(7,'医院端产品主数据','yskjeeqvzzqxtmdv',2,20,20,10,2730,'pli',0,'2018-12-05 17:44:52','2019-02-28 15:43:28'),(8,'HIS','5fkpxcsavx4115yo',2,20,20,10,1,'李发钰',0,'2018-12-11 18:08:30','2018-12-11 18:09:12'),(9,'zl-主数据-总部端','vds1af6jt3xkhago',2,20,20,10,2730,'pli',0,'2019-01-29 14:44:31','2019-01-29 14:55:30'),(10,'前台工作台','0t633nh7uaqbutrf',2,20,20,10,2717,'djchu',0,'2019-01-29 16:12:34','2019-01-29 16:13:22'),(11,'连锁运营管理','zryct31n4yl29euy',2,20,20,10,1,'李发钰',0,'2019-01-29 18:59:05','2019-01-29 19:00:02'),(12,'统计报表','l14xxki88bzo6noa',2,20,20,10,2717,'djchu',0,'2019-03-20 11:08:36','2019-03-20 11:08:41');
/*!40000 ALTER TABLE `t_organ_register_system` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-12 13:09:07
