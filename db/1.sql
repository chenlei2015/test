�������ݿ�
create database market default character set utf8 collate utf8_general_ci;
������
create table cai (
 id int(10) unsigned not null auto_increment primary key, //����Ϊ����Լ�����ֶ�,���Զ������ֶ����һ����������
 uid int(10) unsigned not null,
 name varchar(60) not null unique, //����ΪΨһԼ�����ֶ�,���Զ������ֶ����һ��Ψһ����
 price decimal(5,2) unsigned not null,
 place varchar(300) default null,
 intruduce varchar(3000)  null,
 zai_time  datetime  not null,
 key place_index (place), // ���ֶ�place��һ����ͨ����
 fulltext key intruduce (intruduce), // ���ֶ�intruduce��һ��ȫ������
 constraint caii_user_fk foreign key (uid) references cainong(id) // ���ֶ�uid ���һ�����(caii_user_fk)����
 ��cainong���ֶ�id, ���������ֶλ��Զ������һ����ͨ����
);
create table cainong (
id int(10) unsigned not null auto_increment primary key,
user varchar(60) not null unique,
age tinyint(3)  null,
phone char(11) not null unique,
id_card char(18) not null unique,
sex enum('��','Ů') not null default '��',
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





����в�������
1.û���ֶ��б�ʱ �������ֶ����ֵ, null����ʡ�� ��ʱnull�����������ֶ�
insert into teacher values(null,'����ʦ','11111111');
insert into teacher values(null,'����ʦ','22222222');
insert into teacher values(null,'����ʦ','22222222');
2.���ֶ��б�ʱ �������ֶ����ֵ, �����ֶο�ʡ�� ��ʱ�����������ֶ�ֵ��nullҲ����ʡ��
insert into course (course_name,up_limit,description,status,teacher_no)values('����',100,'��ѧ����',0,1);
insert into course (course_no,course_name,up_limit,description,status,teacher_no)values(null,'Ӣ��',default,'��ѧӢ��',0,1);
3.��ֻѡ��һ�ű�ļ����ֶ�Ϊ�����ֵʱ,�����ֵҪ���ֶ�һһ��Ӧ
insert into course (course_name,description,teacher_no)values('��ѧ','��ѧ��ѧ',1);
ɾ�����¼
delete from tablename where ����;
��ձ�
truncate tablename;
���±��¼
update tablename set �ֶ�1=ֵ1,set �ֶ�2=ֵ2,.......,�ֶ�n=ֵn where ����;
���������ѯ
select * from ��1 [inner|left|right]join ��2 on ��1���2֮��Ĺ�������;
���������ѯ
select * from ��1 [inner|left|right]join ��2 on ��1���2֮��Ĺ������� [inner|left|right]join ��3 on ��2���3֮��Ĺ�������







insert into classes values(1,'���հ�','����ϵ');
insert into classes values(2,'������','��ѧϵ');
insert into classes values(null,'Ӣ���','Ӣ��ϵ');
insert into classes values(null,'�������','�����ϵ');

insert into student values(null,'����','411123456',1);
insert into student values(null,'����','411123453',1);
insert into student values(null,'����','411123896',2);
insert into student values(null,'����','411185456',2);
insert into choose values(null,1,1,40,now());








