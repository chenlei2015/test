创建数据库
create database market default character set utf8 collate utf8_general_ci;
创建表
create table cai (
 id int(10) unsigned not null auto_increment primary key, //声明为主键约束的字段,会自动给该字段添加一个主键索引
 uid int(10) unsigned not null,
 name varchar(60) not null unique, //声明为唯一约束的字段,会自动给该字段添加一个唯一索引
 price decimal(5,2) unsigned not null,
 place varchar(300) default null,
 intruduce varchar(3000)  null,
 zai_time  datetime  not null,
 key place_index (place), // 给字段place加一个普通索引
 fulltext key intruduce (intruduce), // 给字段intruduce加一个全文索引
 constraint caii_user_fk foreign key (uid) references cainong(id) // 给字段uid 添加一个外键(caii_user_fk)关联
 表cainong的字段id, 添加外键的字段会自动的添加一个普通索引
);
create table cainong (
id int(10) unsigned not null auto_increment primary key,
user varchar(60) not null unique,
age tinyint(3)  null,
phone char(11) not null unique,
id_card char(18) not null unique,
sex enum('男','女') not null default '男',
birthday datetime not null default '0000-00-00 00-00-00'
);





create table caijia (
 id int(10) unsigned not null auto_increment primary key,
 uid int(10) unsigned not null,
 name varchar(60) not null unique,
 price decimal(5,2) unsigned not null,
 place varchar(300) default null,
 intruduce varchar(3000)  null,
 zai_time  datetime  not null,
 index plce_index (place),
 fulltext index intrduce (intruduce),
 constraint caii_usr_fk foreign key (uid) references cainong(id)
);





向表中插入数据
1.没有字段列表时 给所有字段添加值, null不可省略 此时null代表自增长字段
insert into teacher values(null,'张老师','11111111');
insert into teacher values(null,'李老师','22222222');
insert into teacher values(null,'王老师','22222222');
2.有字段列表时 给所有字段添加值, 自增字段可省略 此时代表自增长字段值的null也可以省略
insert into course (course_name,up_limit,description,status,teacher_no)values('语文',100,'大学语文',0,1);
insert into course (course_no,course_name,up_limit,description,status,teacher_no)values(null,'英语',default,'大学英语',0,1);
3.当只选择一张表的几个字段为其插入值时,插入的值要与字段一一对应
insert into course (course_name,description,teacher_no)values('化学','大学化学',1);
删除表记录
delete from tablename where 条件;
清空表
truncate tablename;
更新表记录
update tablename set 字段1=值1,set 字段2=值2,.......,字段n=值n where 条件;
两表关联查询
select * from 表1 [inner|left|right]join 表2 on 表1与表2之间的关联条件;
三表关联查询
select * from 表1 [inner|left|right]join 表2 on 表1与表2之间的关联条件 [inner|left|right]join 表3 on 表2与表3之间的关联条件







insert into classes values(1,'文艺班','艺术系');
insert into classes values(2,'奥数班','数学系');
insert into classes values(null,'英语班','英语系');
insert into classes values(null,'计算机班','计算机系');

insert into student values(null,'张三','411123456',1);
insert into student values(null,'李四','411123453',1);
insert into student values(null,'王二','411123896',2);
insert into student values(null,'麻子','411185456',2);
insert into choose values(null,1,1,40,now());








