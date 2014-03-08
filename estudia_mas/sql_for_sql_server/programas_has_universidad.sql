/*
 Navicat SQL Server Data Transfer

 Source Server         : Estudia Mas
 Source Server Version : 10501600
 Source Host           : 72.249.55.107\SQLEXPRESS
 Source Database       : EstudiaMas_LP
 Source Schema         : dbo

 Target Server Version : 10501600
 File Encoding         : utf-8

 Date: 03/01/2013 11:00:46 AM
*/

-- ----------------------------
--  Table structure for [dbo].[programas_has_universidad]
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID('[dbo].[programas_has_universidad]') AND type IN ('U'))
	DROP TABLE [dbo].[programas_has_universidad]
GO
CREATE TABLE [dbo].[programas_has_universidad] (
	[id] int NOT NULL,
	[idprogramas] int NOT NULL,
	[iduniversidad] int NOT NULL,
	[estatus] int NOT NULL DEFAULT ((1)),
	[online] int NOT NULL,
	[tipo] int NOT NULL
)
GO
EXEC sp_addextendedproperty 'MS_Description', '0 - Inactivo / 1 - Activo', 'SCHEMA', 'dbo', 'TABLE', 'programas_has_universidad', 'COLUMN', 'estatus'
GO
EXEC sp_addextendedproperty 'MS_Description', '0 - Licenciatura\n1 - Maestrías\n2 - Cursos / Diplomados \n3 - Especialidad  \n 4 - En Línea', 'SCHEMA', 'dbo', 'TABLE', 'programas_has_universidad', 'COLUMN', 'tipo'
GO

-- ----------------------------
--  Records of [dbo].[programas_has_universidad]
-- ----------------------------
BEGIN TRANSACTION
GO
INSERT INTO [dbo].[programas_has_universidad] VALUES ('5', '6', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('6', '7', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('7', '8', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('8', '9', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('9', '10', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('12', '10', '11', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('13', '10', '24', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('14', '10', '25', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('15', '10', '27', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('16', '11', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('17', '12', '6', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('18', '12', '24', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('19', '12', '25', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('20', '12', '27', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('24', '113', '11', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('25', '113', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('28', '175', '11', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('29', '175', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('30', '175', '24', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('31', '175', '25', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('32', '175', '27', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('34', '176', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('37', '177', '11', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('38', '177', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('41', '178', '11', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('42', '178', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('43', '179', '24', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('44', '179', '25', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('45', '179', '27', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('46', '180', '24', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('47', '180', '25', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('48', '180', '27', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('51', '182', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('52', '183', '12', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('53', '191', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('54', '192', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('55', '193', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('56', '194', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('57', '195', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('58', '196', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('59', '197', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('60', '198', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('61', '199', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('62', '200', '31', '1', '1', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('70', '208', '5', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('71', '209', '5', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('72', '210', '5', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('73', '211', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('74', '212', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('75', '213', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('76', '214', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('77', '215', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('78', '216', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('79', '217', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('80', '218', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('81', '219', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('82', '220', '30', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('83', '7', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('84', '6', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('86', '13', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('87', '14', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('88', '15', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('89', '16', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('90', '17', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('91', '12', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('92', '18', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('93', '8', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('94', '9', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('95', '10', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('96', '11', '6', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('97', '41', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('98', '42', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('99', '43', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('100', '44', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('101', '45', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('102', '46', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('103', '47', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('104', '48', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('105', '49', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('106', '50', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('107', '51', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('108', '52', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('109', '53', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('110', '54', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('111', '55', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('112', '56', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('113', '57', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('114', '58', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('115', '59', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('116', '60', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('117', '61', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('118', '62', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('119', '63', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('120', '64', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('121', '65', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('122', '66', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('123', '67', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('124', '68', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('125', '69', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('126', '70', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('127', '71', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('128', '72', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('129', '73', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('130', '74', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('131', '75', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('132', '76', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('133', '77', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('134', '78', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('135', '79', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('136', '80', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('137', '81', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('138', '82', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('139', '83', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('140', '84', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('141', '85', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('142', '86', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('143', '87', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('144', '88', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('145', '89', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('146', '90', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('147', '91', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('148', '92', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('149', '93', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('150', '94', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('151', '95', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('152', '15', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('153', '96', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('154', '97', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('155', '98', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('156', '99', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('157', '100', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('158', '101', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('159', '102', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('160', '103', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('161', '104', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('162', '105', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('163', '106', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('164', '107', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('165', '108', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('166', '109', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('167', '110', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('168', '111', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('169', '112', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('170', '113', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('171', '114', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('172', '115', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('173', '116', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('174', '117', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('175', '118', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('176', '119', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('177', '120', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('178', '121', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('179', '122', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('180', '123', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('181', '124', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('182', '125', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('183', '126', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('184', '127', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('185', '128', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('186', '130', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('187', '131', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('188', '132', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('189', '133', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('190', '134', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('191', '135', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('192', '136', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('193', '137', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('194', '138', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('195', '139', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('196', '140', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('197', '141', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('198', '142', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('199', '142', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('200', '143', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('201', '144', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('202', '145', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('203', '146', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('204', '147', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('205', '148', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('206', '149', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('207', '150', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('208', '151', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('209', '152', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('210', '153', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('211', '154', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('212', '155', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('213', '156', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('214', '157', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('215', '158', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('216', '159', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('217', '160', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('218', '161', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('220', '162', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('221', '163', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('222', '164', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('223', '165', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('224', '165', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('225', '166', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('226', '167', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('227', '168', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('228', '169', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('229', '170', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('230', '171', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('231', '172', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('232', '173', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('233', '79', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('234', '83', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('235', '86', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('236', '87', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('237', '89', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('238', '91', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('239', '15', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('240', '97', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('241', '102', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('242', '103', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('243', '108', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('244', '113', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('245', '116', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('246', '117', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('247', '118', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('248', '120', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('249', '122', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('250', '131', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('251', '133', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('253', '134', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('254', '135', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('255', '136', '8', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('256', '175', '26', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('257', '10', '26', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('258', '12', '26', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('259', '179', '26', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('260', '180', '26', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('261', '19', '33', '1', '0', '3');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('262', '20', '33', '1', '0', '3');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('263', '21', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('264', '22', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('265', '23', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('266', '24', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('267', '25', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('268', '26', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('269', '27', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('270', '28', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('271', '29', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('272', '30', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('273', '31', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('274', '32', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('275', '33', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('276', '34', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('277', '35', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('278', '36', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('279', '37', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('280', '38', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('281', '39', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('282', '40', '33', '1', '0', '2');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('283', '10', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('284', '181', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('285', '113', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('286', '182', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('287', '175', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('288', '176', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('289', '183', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('290', '177', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('291', '178', '13', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('292', '221', '32', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('293', '6', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('294', '113', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('295', '16', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('296', '15', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('297', '17', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('298', '14', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('299', '18', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('300', '222', '7', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('301', '181', '14', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('302', '113', '14', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('303', '183', '14', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('304', '177', '14', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('305', '178', '14', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('309', '175', '28', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('310', '10', '28', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('311', '12', '28', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('312', '179', '28', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('313', '180', '28', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('314', '184', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('315', '155', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('316', '185', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('317', '10', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('318', '11', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('319', '186', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('320', '187', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('321', '12', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('322', '188', '34', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('328', '175', '29', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('329', '10', '29', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('330', '12', '29', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('331', '179', '29', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('332', '180', '29', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('333', '10', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('334', '181', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('335', '113', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('336', '189', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('337', '175', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('338', '183', '15', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('339', '10', '16', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('340', '113', '16', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('341', '175', '16', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('342', '178', '16', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('343', '181', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('344', '113', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('345', '182', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('346', '175', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('347', '183', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('348', '178', '17', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('349', '10', '18', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('350', '113', '18', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('351', '182', '18', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('352', '175', '18', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('353', '178', '18', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('354', '10', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('355', '113', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('356', '182', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('357', '175', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('358', '183', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('359', '177', '19', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('360', '182', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('361', '175', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('362', '177', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('363', '178', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('364', '10', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('365', '113', '20', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('366', '10', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('367', '175', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('368', '183', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('369', '177', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('370', '181', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('371', '113', '21', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('372', '10', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('373', '181', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('374', '113', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('375', '182', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('376', '175', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('377', '177', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('378', '178', '22', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('379', '10', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('380', '181', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('381', '113', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('382', '182', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('383', '175', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('384', '177', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('385', '178', '23', '1', '0', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('390', '226', '24', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('391', '227', '24', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('392', '228', '24', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('393', '229', '24', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('394', '230', '24', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('395', '226', '25', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('396', '227', '25', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('397', '228', '25', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('398', '229', '25', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('399', '230', '25', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('404', '160', '11', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('405', '114', '11', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('406', '113', '11', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('407', '180', '11', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('408', '225', '12', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('409', '224', '12', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('410', '113', '12', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('411', '180', '12', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('412', '226', '27', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('413', '227', '27', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('414', '228', '27', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('415', '229', '27', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('416', '230', '27', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('418', '226', '26', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('419', '227', '26', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('420', '228', '26', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('421', '229', '26', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('422', '230', '26', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('423', '225', '13', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('424', '224', '13', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('425', '113', '13', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('426', '180', '13', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('427', '224', '14', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('428', '226', '28', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('429', '227', '28', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('430', '228', '28', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('431', '229', '28', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('432', '230', '28', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('433', '226', '29', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('434', '227', '29', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('435', '228', '29', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('436', '229', '29', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('437', '230', '29', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('438', '225', '15', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('439', '224', '15', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('440', '113', '15', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('441', '180', '15', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('443', '225', '16', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('444', '224', '16', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('445', '113', '16', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('446', '225', '17', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('448', '224', '17', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('449', '113', '17', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('450', '180', '17', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('451', '160', '18', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('452', '224', '18', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('453', '180', '18', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('454', '225', '19', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('455', '224', '19', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('456', '113', '19', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('457', '180', '19', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('458', '160', '19', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('459', '225', '20', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('460', '224', '20', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('461', '113', '20', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('462', '180', '20', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('463', '225', '21', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('464', '224', '21', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('465', '113', '21', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('466', '180', '21', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('467', '225', '22', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('468', '224', '22', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('469', '180', '22', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('470', '224', '23', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('471', '180', '23', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('476', '6', '35', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('477', '175', '35', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('478', '41', '35', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('495', '202', '1', '1', '0', '1');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('496', '158', '1', '1', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('497', '201', '1', '1', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('498', '7', '2', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('499', '158', '2', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('500', '16', '2', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('501', '223', '2', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('502', '205', '3', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('503', '204', '3', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('504', '206', '3', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('505', '4', '4', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('506', '2', '4', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('507', '1', '4', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('508', '207', '4', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('509', '175', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('510', '176', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('511', '225', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('512', '178', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('513', '10', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('514', '224', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('515', '180', '9', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('516', '225', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('517', '178', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('518', '181', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('519', '10', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('520', '224', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('521', '182', '10', '0', '1', '0');
INSERT INTO [dbo].[programas_has_universidad] VALUES ('522', '180', '10', '0', '1', '0');
GO
COMMIT
GO


-- ----------------------------
--  Primary key structure for table [dbo].[programas_has_universidad]
-- ----------------------------
ALTER TABLE [dbo].[programas_has_universidad] ADD
	CONSTRAINT [PK__programa__3213E83F1367E606] PRIMARY KEY CLUSTERED ([id]) 
	WITH (PAD_INDEX = OFF,
		IGNORE_DUP_KEY = OFF,
		ALLOW_ROW_LOCKS = ON,
		ALLOW_PAGE_LOCKS = ON)
GO

-- ----------------------------
--  Options for table [dbo].[programas_has_universidad]
-- ----------------------------
ALTER TABLE [dbo].[programas_has_universidad] SET (LOCK_ESCALATION = TABLE)
GO

