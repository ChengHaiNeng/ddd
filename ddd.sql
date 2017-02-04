** ���� :projects **
�ֶ� ���� ˵��
pid primary key ����
uid integer �û�uid
name string �û���
money integer ������
mobile string(11) �ֻ���
title string ��Ŀ����
rate tinyint ������ ( �ٷֱ� )
hrange tinyint ��������,��Ϊ��λ
status tinyint -1��ͨ���� 0 ����� ,1 �б�
recive integer ���б���
pubtime integer ��Ŀ����ʱ��
** ������Ϣ�� :atts **
�ֶ� ���� ˵��
aid primary key ����
uid integer �û� uid
pid integer ��Ŀ pid
title string ��Ŀ����
realname string ��ʵ����
age tinyint ����
gender enum (' �� ',' Ů ') �Ա�
salary tinyint ����,ǧΪ��λ
jobcity string ��������
udesc string �û�����



// users ���û���
public function up()
{
Schema::create('users', function (Blueprint $table) {
$table->increments('uid');
$table->string('name');
$table->string('email')->unique(); //����Ψһ����
$table->string('mobile',11);
$table->string('password', 60);
$table->rememberToken();
$table->integer('regtime');
$table->integer('lastlogin');
});
}

// projects �� Ǩ���ļ�����
public function up()
{
Schema::create('projects', function (Blueprint $table) {
$table->increments('pid');
$table->integer('uid');
$table->string('name',10);
$table->integer('money');
$table->string('mobile',11);
$table->string('title',50);
$table->tinyinteger('rate');
$table->tinyinteger('hrange');
$table->tinyinteger('status'); # 0 ����� ,1 �б��� ,2 ������ ,3 ����
$table->integer('recive');
$table->integer('pubtime');
});
}

/
/ atts �� Ǩ���ļ�������Ϣ��Ͷ���
public function up()
{
Schema::create('atts', function (Blueprint $table) {
$table->increments('aid');
$table->integer('uid');
$table->integer('pid');
$table->string('title');
$table->string('realname');
$table->tinyinteger('age');
$table->enum('gender',['��','Ů']);
$table->tinyinteger('salary');
$table->string('jobcity');
$table->string('udesc');
});
}

Ͷ��� :bids
�ֶ� ���� ˵��
bid primary key ����
uid integer �û� uid
pid integer ��Ŀ pid
title string ��Ŀ����
money integer Ͷ����
pubtime integer Ͷ��ʱ��
// bids �� Ǩ���ļ�Ͷ���
public function up()
{
Schema::create('bids', function (Blueprint $table) {
$table->increments('bid');
$table->integer('uid');
$table->integer('pid');
$table->string('title',50);
$table->integer('money');
$table->integer('pubtime');
});
}


����� :hks
�ֶ� ���� ˵��
hid primary key ����
uid integer �û� uid
pid integer ��Ŀ pid
title string ��Ŀ����
amount integer ÿ�»�����
paydate date �˵���
status tinyint �Ƿ��ѻ�
//����� Ǩ���ļ�
public function up()
{
Schema::create('hks', function (Blueprint $table) {
$table->increments('hid');
$table->integer('uid');
$table->integer('pid');
$table->string('title');
$table->integer('amount');
$table->date('paydate');
$table->tinyinteger('status');
});
}


Ԥ������� tasks��
�ֶ� ���� ˵��
tid primary key ����
uid integer �û� uid
pid integer ��Ŀ pid
title string ��Ŀ����
amount integer ÿ��Ӧ�յ���Ϣ
enddate date ����Ϣ��ֹ��
// tasks ��Ǩ���ļ�Ԥ�������
public function up()
{
Schema::create('tasks', function (Blueprint $table) {
$table->increments('tid');
$table->integer('uid');
$table->integer('pid');
$table->string('title');
$table->integer('amount');
$table->date('enddate');
});
}


ÿ������� :grows
�ֶ� ���� ˵��
gid primary key ����
uid integer �û� uid
pid integer ��Ŀ pid
title string ��Ŀ����
amount integer ÿ�����Ϣ
paytime date ��������
// grows ��Ǩ���ļ�
Schema::create('grows', function (Blueprint $table) {
$table->increments('gid');
$table->integer('uid');
$table->integer('pid');
$table->string('title',60);
$table->integer('amount');
$table->date('paytime');
});