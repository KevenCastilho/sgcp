<?php
// Database Settings
$CONFIG['sql_host']			=	'sql209.epizy.com';			// ����ͧ������ �»��Ԩ��� localhost
$CONFIG['sql_username']		=	'epiz_28273216';			// �к� User �ͧ SQL
$CONFIG['sql_password']		=	'n1GoBCNAYHcei';			// �к� Password �ͧ SQL
$CONFIG['sql_dbname']		=	'epiz_28273216_ragnarok';			// �кت��Ͱҹ�����Ţͧ Ragnarok
$CONFIG['sql_cpdbname']		=	'epiz_28273216_ragnarok';			// ���ͧ͢�ҹ������ CP
$CONFIG['mysql_charset']		=	'auto';			// ��駤�� Charset �ͧ Mysql (auto, disable, tis620, UTF8 and etc.)
$CONFIG['server_name']		=	'Ragnarok Online';		// �кت������������
$CONFIG['language']		=	'Brasil';			// �к����Ңͧ CP (Thai, English)
$CONFIG['default_theme']		=	'SGCP_Default';		// �кت���������ͧ Theme ����������� Theme ��ѡ
$CONFIG['time_offset']		=	'GMT-0300';		// ��駤��⫹���� (��һ���: GMT+0700)
$CONFIG['admin_email']		=	'admin@localhost.com';	// �к� E-Mail Address
$CONFIG['gzip']			=	'0';			// �к������ͧ Gzip (0: ������ҹ 1: �����Դ��ҹ Gzip)
$CONFIG['save_type']		=	'0';			// �к������ͧ����红����� (0: Cookie 1: Session)
$CONFIG['account_id_start']		=	'20000000';			// �к������Ţ Account ID �������㹰ҹ������ Ragnarok (��һ���: 2000000)

// SMTP Settings
$CONFIG['smtp_host']		=	'localhost';			// SMTP Host (��һ���: localhost)
$CONFIG['smtp_port']		=	'25';			// SMTP Port (��һ���: 25)

// Main Page Settings
$CONFIG['language_select_mode']	=	'1';			// �к����� Language Select (0: �����ҹ 1: ��ҹ)
$CONFIG['theme_select_mode']	=	'1';			// �к����� Theme Select (0: �����ҹ 1: ��ҹ)
$CONFIG['show_ro_news_per']		=	'5';			// �кص���Ţ�����ʴ��ӹǹ���ǵ��˹��˹��
$CONFIG['show_last_topic_reply']	=	'1';			// �к������ͧ����ʴ���з������ش����ա�õͺ�����˹���á (0: ����ʴ� 1: �����ʴ�)
$CONFIG['show_last_topic_reply_per']	=	'5';			// �кص���Ţ�����ʴ��ӹǹ��з������ش�˹���á
$CONFIG['show_guild_standing']	=	'1';			// �к������ͧ����ʴ���Ŵ�����ͺ��ͧ����ҷ�˹���á (0: ����ʴ� 1: �����ʴ�)
$CONFIG['show_all_id']		=	'0';			// �к������ͧ����ʴ��ӹǹ�ʹշ����� (0: ����ʴ� 1: �����ʴ�)
$CONFIG['lost_pass_mode']		=	'0';			// �к������к�������ʼ�ҹ (0: �����ҹ 1: �Դ��ҹ)

// Administrator Settings
$CONFIG['AM_per_page']		=	'30';			// �кص���Ţ�����ʴ��ӹǹ�ʹյ��˹��˹�Ңͧ Account Management
$CONFIG['deluser_mode']		=	'1';			// �к���������Ѻ˹��ź�ʹ� (0: �����ҹ 1: ��ҹ)

// Members Settings
$CONFIG['download_mode']		=	'1';			// ͹حҵ��� Guest ��ҹ Download ������� (0: ���͹حҵ 1: ͹حҵ)

// Player/Guild Ranking Settings
$CONFIG['player_rank_mode']		=	'1';			// ͹حҵ�����Ҫԡ��ҹ Player Ranking ������� (0: ���͹حҵ 1: ͹حҵ 2: ੾�� Administrator)
$CONFIG['guild_rank_mode']		=	'1';			// ͹حҵ�����Ҫԡ��ҹ Guild Ranking ������� (0: ���͹حҵ 1: ͹حҵ 2: ੾�� Administrator)
$CONFIG['show_gm_ranking']		=	'0';			// �к������ͧ����ʴ���ª��� GM ��к� Player Ranking (0: ����ʴ� 1: �����ʴ�)
$CONFIG['min_gmlv_ranking']		=	'50';			// �к��ӴѺ��鹵�� LEVEL �ͧ GM ���ͷ����������ʴ���ª�����к� Player Ranking
$CONFIG['guild_per_page']		=	'50';			// �кبӹǹ��Ŵ��������ʴ����˹��˹�ҨѴ�ѹ�Ѻ��Ŵ��

// Registration Settings
$CONFIG['register_mode']		=	'1';			// �к������к���Ѥ���Ҫԡ (0: �Դ�Ѻ��Ѥ� 1: �Դ�Ѻ��Ѥ� 2: �Դ�Ѻ��Ѥ�������к� E-Mail Activation)
$CONFIG['md5_support']		=	'0';			// �к� MD5 (0: �����ҹ 1: �����Դ��ҹ)
$CONFIG['security_mode']		=	'1';			// �к����������ѡ�Ҥ�����ʹ��� (0: �����ҹ 1: �������繵���Ţ 2: ���������ѡ�������ѧ��ɵ�Ǿ�����˭� 3: �������繵���Ţ��������ѧ��ɵ�Ǿ�����˭�)

// Login Settings
$CONFIG['change_password']		=	'1';			// �к���������Ѻ�����Ҫԡ���ö����¹�ŧ�������� (0: ����¹�ŧ����� 1: ����¹�ŧ��)
$CONFIG['change_password_with_sls']	=	'1';			// ����Ǩ�ͺ SLS Password ���������¹���ʼ�ҹ������� (0: �����ҹ 1: ��ҹ)
$CONFIG['change_slspassword']	=	'1';			// �к���������Ѻ�����Ҫԡ���ö����¹�ŧ SLS �������� (0: ����¹�ŧ����� 1: ����¹�ŧ��)
$CONFIG['change_email']		=	'1';			// �к���������Ѻ�����Ҫԡ���ö����¹�ŧ������ (0: ����¹�ŧ����� 1: ����¹�ŧ��)

// Character Management Settings
$CONFIG['char_manage_mode']	=	'1';			// ͹حҵ�����Ҫԡ��ҹ Character Management ������� (0: ���͹حҵ 1: ͹حҵ 2: ੾�� Administrator)
$CONFIG['manage_zeny_mode']	=	'0';			// ͹حҵ�����Ҫԡ�Ѵ����Թ�����ʹ�������� (0: �����ҹ 1: ��ҹ)
$CONFIG['max_zeny']		=	'1000000000';		// �кبӹǹ�Թ�ҡ����ش���˹�觵���Ф� ���ͻ�ͧ�ѹ����Դ�ѭ��㹡�èѴ����Թ�����ʹ� (��һ���: 1000000000)

// Status Server Settings
$CONFIG['check_server']		=	'0';			// �к������ͧ��õ�Ǩ�ͺʶҹТͧ��������� (0: �Դ�ѧʶҹ� 1:��������Ǩ�ͺʶҹ�)
$CONFIG['maintenance']		=	'0';			// �ҡ��駤���� 1 �к��к͡ʶҹ������������ҡ��ѧ��Ѻ��ا
$CONFIG['time_check_intervals']	=	'120';			// ˹�ǧ����㹡�õ�Ǩ�ͺʶҹ���������� (˹������Թҷ�)
$CONFIG['server_ip']			=	'127.0.0.1';			// �к� IP Address �ͧ����ͧ�س�����㹡�õ�Ǩ�ͺʶҹ����������
$CONFIG['loginport']			=	'6900';			// �к� Login Port �ͧ����ͧ�س
$CONFIG['charport']			=	'6121';			// �к� Char Port �ͧ����ͧ�س
$CONFIG['mapport']			=	'5121';			// �к� Map Port �ͧ����ͧ�س

// Forum Settings
$CONFIG['forum_name']		=	'Ragnarok Online Forum';	// �кت��Ϳ�����
$CONFIG['uploads_mode']		=	'1';			// �Դ�����ҹ�Ѿ��Ŵ��캹����������� (0: �Դ��ҹ 1: �Դ��ҹ)
$CONFIG['uploads_folder']		=	'uploads';			// ��������������㹡������� Uploads (����ͧ������)
$CONFIG['avatar_folder']		=	'uploads/avatars';		// ��������������㹡������� Avatar (����ͧ������)
$CONFIG['upload_avatar']		=	'1';			// �����Ҫԡ����ö�Ѿ��Ŵ�ٻ Avatar �ҡ����ͧ��������� (0: ����� 1: ��)
$CONFIG['uploads_size']		=	'200';			// �ӡѴ��Ҵ�ͧ�������㹡�� Uploads (˹��� Kb.)
$CONFIG['avatar_size']		=	'50';			// �ӡѴ��Ҵ�ͧ����ٻ�Ҿ Avatar (˹��� Kb.)
$CONFIG['max_img_width']		=	'600';			// �������ٻ�Ҿ������բ�Ҵ�������ҧ�Թ��� pixels (0: �����ҹ)
$CONFIG['max_img_height']		=	'0';			// �������ٻ�Ҿ������բ�Ҵ�����٧�Թ��� pixels (0: �����ҹ)
$CONFIG['delay_post']		=	'30';			// �кص���Ţ����˹�ǧ������ѧ�ҡ�ʵ��з�� (˹������Թҷ�)
$CONFIG['t_per_page']		=	'15';			// �кص���Ţ�����ʴ��ӹǹ��з����˹��˹��
$CONFIG['per_page']		=	'20';			// �кص���Ţ�����ʴ��ӹǹ���ͺ��з����˹��˹��
$CONFIG['max_post_length']		=	'20480';			// �кبӹǹ����ѡ�÷������ʵ���
$CONFIG['max_signature_length']	=	'500';			// �кبӹǹ����ѡ�âͧ�����
$CONFIG['guest_can_post']		=	'1';			// �к�������õ��/�ʵ��з��ͧ Guest (0: Guest �������ö���/�ʵ��з���� 1: Guest ����ö���/�ʵ��з����)

// Log Setting
$CONFIG['log_select']		=	'0';			// �红����� SELECT queries �������
$CONFIG['log_insert']		=	'0';			// �红����� INSERT queries �������
$CONFIG['log_update']		=	'0';			// �红����� UPDATE queries �������
$CONFIG['log_delete']		=	'0';			// �红����� DELETE queries �������
$CONFIG['log_register']		=	'1';			// �红����š����Ѥ���Ҫԡ�������

// CP Settings
$CONFIG['height']			=	'900';			// �кؤ����٧�ͧ˹���Ǻ (����ö�к��� % ��)
$CONFIG['width']			=	'850';			// �кؤ������ҧ�ͧ˹���Ǻ (����ö�к��� % ��)
?>