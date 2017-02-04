** 借款表 :projects **
字段 类型 说明
pid primary key 主键
uid integer 用户uid
name string 用户名
money integer 贷款金额
mobile string(11) 手机号
title string 项目名称
rate tinyint 年利率 ( 百分比 )
hrange tinyint 还款期限,月为单位
status tinyint -1不通过， 0 审核中 ,1 招标
recive integer 已招标金额
pubtime integer 项目发布时间
** 借款附属信息表 :atts **
字段 类型 说明
aid primary key 主键
uid integer 用户 uid
pid integer 项目 pid
title string 项目名称
realname string 真实姓名
age tinyint 年龄
gender enum (' 男 ',' 女 ') 性别
salary tinyint 收入,千为单位
jobcity string 工作城市
udesc string 用户描述



// users 表用户表
public function up()
{
Schema::create('users', function (Blueprint $table) {
$table->increments('uid');
$table->string('name');
$table->string('email')->unique(); //加入唯一索引
$table->string('mobile',11);
$table->string('password', 60);
$table->rememberToken();
$table->integer('regtime');
$table->integer('lastlogin');
});
}

// projects 表 迁移文件借款表
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
$table->tinyinteger('status'); # 0 审核中 ,1 招标中 ,2 还款中 ,3 结束
$table->integer('recive');
$table->integer('pubtime');
});
}

/
/ atts 表 迁移文件借款附属信息表投标表
public function up()
{
Schema::create('atts', function (Blueprint $table) {
$table->increments('aid');
$table->integer('uid');
$table->integer('pid');
$table->string('title');
$table->string('realname');
$table->tinyinteger('age');
$table->enum('gender',['男','女']);
$table->tinyinteger('salary');
$table->string('jobcity');
$table->string('udesc');
});
}

投标表 :bids
字段 类型 说明
bid primary key 主键
uid integer 用户 uid
pid integer 项目 pid
title string 项目名称
money integer 投标金额
pubtime integer 投标时间
// bids 表 迁移文件投标表
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


还款表 :hks
字段 类型 说明
hid primary key 主键
uid integer 用户 uid
pid integer 项目 pid
title string 项目名称
amount integer 每月还款金额
paydate date 账单日
status tinyint 是否已还
//还款表 迁移文件
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


预期收益表 tasks：
字段 类型 说明
tid primary key 主键
uid integer 用户 uid
pid integer 项目 pid
title string 项目名称
amount integer 每天应收的利息
enddate date 收利息截止日
// tasks 表迁移文件预期收益表
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


每天收益表 :grows
字段 类型 说明
gid primary key 主键
uid integer 用户 uid
pid integer 项目 pid
title string 项目名称
amount integer 每天的利息
paytime date 收益日期
// grows 表迁移文件
Schema::create('grows', function (Blueprint $table) {
$table->increments('gid');
$table->integer('uid');
$table->integer('pid');
$table->string('title',60);
$table->integer('amount');
$table->date('paytime');
});