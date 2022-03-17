<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lessons')->delete();
        
        \DB::table('lessons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'course_id' => 3,
                'title' => 'Chương 1 : Tổng quan',
                'descriptif' => 'tổng quan về hệ quản trị CSDL',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Hệ quản trị cơ sở dữ liệu (DBMS) l&agrave; một phần mềm cho ph&eacute;p tạo lập c&aacute;c CSDL cho c&aacute;c ứng dụng kh&aacute;c nhau v&agrave; điều khiển mọi truy cập tới c&aacute;c CSDL đ&oacute;. Nghĩa l&agrave;, hệ quản trị CSDL cho ph&eacute;p định nghĩa (x&aacute;c định kiểu, cấu tr&uacute;c, r&agrave;ng buộc dữ liệu), tạo lập (lưu trữ dữ liệu tr&ecirc;n c&aacute;c thiết bị nhớ) v&agrave; thao t&aacute;c (truy vấn, cập nhật, kết xuất, ...) c&aacute;c CSDL cho c&aacute;c ứng dụng kh&aacute;c nhau. V&iacute; dụ: MS. Access, MS. SQL Server, ORACLE, IBM DB2, ...</p>
<p><span class="progressive-img_capturer progressive-img_wrapper article-img-wrapper"><canvas class="progressive-img_tiny progressive-img_filter-blur article-img-tiny progressive-img_hidden" width="328" height="224"></canvas><img class="progressive-img_full article-img" src="https://images.viblo.asia/dfcc8972-f517-4294-b2e2-56825d856df3.png" alt="" width="328" height="224" data-full-src="https://images.viblo.asia/dfcc8972-f517-4294-b2e2-56825d856df3.png" data-tiny-src="https://images.viblo.asia/60/dfcc8972-f517-4294-b2e2-56825d856df3.png" data-zoom-src="https://images.viblo.asia/full/dfcc8972-f517-4294-b2e2-56825d856df3.png" data-srcset="https://images.viblo.asia/retina/dfcc8972-f517-4294-b2e2-56825d856df3.png 2x" data-wrapper-class="article-img-wrapper" data-tiny-class="article-img-tiny" data-full-class="article-img" /></span></p>
<p>-- Bộ Quản l&yacute; lưu trữ</p>
<ul>
<li>Lưu trữ v&agrave; truy xuất dữ liệu tr&ecirc;n c&aacute;c thiết bị nhớ.</li>
<li>Tổ chức tối ưu dữ liệu tr&ecirc;n thiết bị nhớ.</li>
<li>Tương t&aacute;c hiệu quả với bộ quản l&yacute; tệp.</li>
</ul>
<p>-- Bộ xử l&yacute; c&acirc;u hỏi</p>
<ul>
<li>T&igrave;m kiếm dữ liệu trả lời cho một y&ecirc;u cầu truy vấn.</li>
<li>Biến đổi truy vấn ở mức cao th&agrave;nh c&aacute;c y&ecirc;u cầu c&oacute; thể hiểu được bởi hệ CSDL.</li>
<li>Lựa chọn một kế hoạch tốt nhất để trả lời truy vấn n&agrave;y.</li>
</ul>
<p>-- Bộ Quản trị giao dịch</p>
<ul>
<li>Định nghĩa giao dịch: một tập c&aacute;c thao t&aacute;c được xử l&yacute; như một đơn vị kh&ocirc;ng chia căt được.</li>
<li>Đảm bảo t&iacute;nh đ&uacute;ng đắn v&agrave; t&iacute;nh nhất qu&aacute;n của dữ liệu.</li>
<li>Quản l&yacute; điều khiển tương tranh.</li>
<li>Ph&aacute;t hiện lỗi v&agrave; phục hồi CSDL</li>
</ul>',
                'file' => 'pdf/chuong1.pdf',
                'created_at' => '2022-02-17 14:35:22',
                'updated_at' => '2022-02-17 14:35:22',
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 3,
                'title' => 'Chuong 2 : Một số hệ quản trị CSDL',
                'descriptif' => 'Một số hệ quản trị CSDL',
                'image' => 'lessons/default1.png',
                'objectif' => '7',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p><strong>Một số hệ quản trị CSDL</strong></p>
<p><strong>1. MySQL</strong></p>
<ul>
<li>MySQL l&agrave; hệ quản trị cơ sở dữ liệu tự do nguồn mở phổ biến nhất thế giới v&agrave; được c&aacute;c nh&agrave; ph&aacute;t triển rất ưa chuộng trong qu&aacute; tr&igrave;nh ph&aacute;t triển ứng dụng. V&igrave; MySQL l&agrave; cơ sở dữ liệu tốc độ cao, ổn định v&agrave; dễ sử dụng, c&oacute; t&iacute;nh khả chuyển, hoạt động tr&ecirc;n nhiều hệ điều h&agrave;nh cung cấp một hệ thống lớn c&aacute;c h&agrave;m tiện &iacute;ch rất mạnh. Với tốc độ v&agrave; t&iacute;nh bảo mật cao, MySQL rất th&iacute;ch hợp cho c&aacute;c ứng dụng c&oacute; truy nhập CSDL tr&ecirc;n internet. N&oacute; c&oacute; nhiều phi&ecirc;n bản cho c&aacute;c hệ điều h&agrave;nh kh&aacute;c nhau: phi&ecirc;n bản Win32 cho c&aacute;c hệ điều h&agrave;nh d&ograve;ng Windows, Linux, Mac OS X, Unix, FreeBSD, NetBSD, Novell NetWare, SGI Irix, Solaris, SunOS, ...</li>
<li>MySQL được sử dụng cho việc bổ trợ PHP, Perl, v&agrave; nhiều ng&ocirc;n ngữ lập tr&igrave;nh kh&aacute;c, n&oacute; l&agrave;m nơi lưu trữ th&ocirc;ng tin của c&aacute;c trang web viết bằng PHP hay Perl.</li>
<li>MySQL hiện nay c&oacute; 2 phi&ecirc;n bản (version): miễn ph&iacute; (MySQL Community Server) v&agrave; c&oacute; ph&iacute; (Enterprise Server).</li>
</ul>
<p>-- Một số đặc điểm của MySQL</p>
<ul>
<li>MySQL quản l&yacute; dữ liệu th&ocirc;ng qua c&aacute;c CSDL, mỗi CSDL c&oacute; thể c&oacute; nhiều bảng quan hệ, chứa dữ liệu.</li>
<li>MySQL c&oacute; cơ chế ph&acirc;n quyền người sử dụng ri&ecirc;ng, mỗi người d&ugrave;ng c&oacute; thể được quản l&yacute; một hoặc nhiều CSDL kh&aacute;c nhau, mỗi người d&ugrave;ng c&oacute; một t&ecirc;n truy cập (user name) v&agrave; mật khẩu (password) tương ứng để truy xuất đến CSDL.</li>
<li>Khi ta truy vấn tới CSDL MySQL, ta phải cung cấp t&ecirc;n truy cập v&agrave; mật khẩu của t&agrave;i khoản c&oacute; quyền sử dụng CSDL đ&oacute;. Nếu kh&ocirc;ng, ch&uacute;ng ta sẽ kh&ocirc;ng l&agrave;m được g&igrave; cả giống như quyền chứng thực người d&ugrave;ng trong SQL Server vậy.</li>
</ul>
<p><strong>2. SQL Server</strong></p>
<p><strong>Microsoft SQL Server</strong>&nbsp;l&agrave; một hệ quản trị cơ sở dữ, cung cấp c&aacute;ch tổ chức dữ liệu bằng c&aacute;ch lưu ch&uacute;ng v&agrave;o c&aacute;c bảng. Dữ liệu quan hệ được lưu trữ trong c&aacute;c bảng v&agrave; c&aacute;c quan hệ đ&oacute; được định nghĩa giữa c&aacute;c bảng với nhau. Người d&ugrave;ng truy cập dữ liệu tr&ecirc;n Server th&ocirc;ng qua ứng dụng. Người quản trị CSDL truy cập Server trực tiếp để thực hiện c&aacute;c chức năng cấu h&igrave;nh, quản trị v&agrave; thực hiện c&aacute;c thao t&aacute;c bảo tr&igrave; CSDL. Ngo&agrave;i ra, SQL Server l&agrave; một CSDL c&oacute; khả năng mở rộng, nghĩa l&agrave; ch&uacute;ng c&oacute; thể lưu một lượng lớn dữ liệu v&agrave; hỗ trợ t&iacute;nh năng cho ph&eacute;p nhiều người d&ugrave;ng truy cập dữ liệu đồng thời. C&aacute;c phi&ecirc;n bản của SQL Server phổ biến hiện n&agrave;y tr&ecirc;n thị trường l&agrave; SQL Server 7.0, SQL Server 2000, SQL Server 2005, SQL Server 2008, ...</p>
<p>C&aacute;c phi&ecirc;n bản của SQL Server gồm 6 bản ch&iacute;nh dưới đ&acirc;y:</p>
<ul>
<li>Enterpise Manager: L&agrave; phi&ecirc;n bản đầy đủ của SQL Server c&oacute; thể chạy tr&ecirc;n 32CPU v&agrave; 64GB RAM. C&oacute; c&aacute;c dịch vụ ph&acirc;n t&iacute;ch dữ liệu Analysis Service.</li>
<li>Standard: Giống như Enterprise nhưng bị hạn chế một số t&iacute;nh năng cao cấp, c&oacute; thể chạy tr&ecirc;n 2CPU, 4GB RAM.</li>
<li>Personal: Phi&ecirc;n bản n&agrave;y chủ yếu để chạy tr&ecirc;n PC, n&ecirc;n c&oacute; thể chạy tr&ecirc;n c&aacute;c hệ điều h&agrave;nh Windows 9x, Windows XP, Windows 2000, Windows 2003...</li>
<li>L&agrave; phi&ecirc;n bản tương tự như Enterprise nhưng bị giới hạn bởi số user kết nối đến.</li>
<li>Desktop Engine: L&agrave; phi&ecirc;n bản một engine chỉ chạy tr&ecirc;n desktop v&agrave; kh&ocirc;ng c&oacute; giao diện người d&ugrave;ng (GUI), k&iacute;ch thước CSDL giới hạn bởi 2GB.</li>
<li>Win CE: Sử dụng cho c&aacute;c ứng dụng chạy tr&ecirc;n Windows CE.</li>
<li>Trial: Phi&ecirc;n bản d&ugrave;ng thử, bị giới hạn bởi thời gian.</li>
<li>SQL Client: L&agrave; phi&ecirc;n bản d&agrave;nh cho m&aacute;y kh&aacute;ch, khi thực hiện khai th&aacute;c sẽ thực hiện kết nối đến phi&ecirc;n bản SQL Server, phi&ecirc;n bản n&agrave;y cung cấp giao diện GUI khai th&aacute;c cho người sử dụng.</li>
<li>SQL Connectivity only: L&agrave; phi&ecirc;n bản sử dụng chỉ cho c&aacute;c ứng dụng để kết nối đến SQL Server, phi&ecirc;n bản n&agrave;y kh&ocirc;ng cung cấp c&ocirc;ng cụ GUI cho người d&ugrave;ng khai th&aacute;c SQL Server.</li>
</ul>
<p><strong>3. DB2</strong></p>
<p>DB2 l&agrave; một trong c&aacute;c d&ograve;ng phần mềm quản trị cơ sở dữ liệu quan hệ của h&atilde;ng IBM. N&oacute; được ph&aacute;t h&agrave;nh đầu ti&ecirc;n v&agrave;o năm 1982 v&agrave; hiện đang sẵn d&ugrave;ng cho một phạm vị rộng c&aacute;c nền hệ điều h&agrave;nh, được d&ugrave;ng chủ yếu tr&ecirc;n Unix (thường gọi AIX), Linux, IBM i (trước đ&acirc;y l&agrave; OS/400), z/OS and Windows Servers. DB2 sử dụng ng&ocirc;n ngữ SQL để đọc v&agrave; viết th&ocirc;ng tin v&agrave;o dữ liệu.</p>
<p>C&aacute;c phi&ecirc;n bản của DB2:</p>
<ul>
<li>DB2 for Z/OS: cung cấp c&aacute;c t&iacute;nh năng của DB2 cho c&aacute;c hệ thống m&aacute;y chủ.</li>
<li>DB2 Personal Edition: cung cấp cho người d&ugrave;ng đơn lẻ tr&ecirc;n một m&aacute;y t&iacute;nh c&aacute; nh&acirc;n.</li>
<li>DB2 Enterprise Server Edition (ESE) l&agrave; một RDBMS ho&agrave;n chỉnh với c&agrave;i đặt kh&aacute;ch/chủ (client/server setup)</li>
<li>DB2 Workgroup Server Editon (WSE) chủ yếu nhằm đến c&aacute;c doanh nghiệp từ nhỏ đến vừa với tất cả c&aacute;c t&iacute;nh năng của DB2 ESE, trừ kết nối với m&aacute;y t&iacute;nh lớn.</li>
</ul>
<p><strong>4. Oracle</strong></p>
<p>Kh&ocirc;ng c&oacute; g&igrave; ngạc nhi&ecirc;n khi Oracle được xem l&agrave; hệ quản trị cơ sở dữ liệu phổ biến nhất thế giới. Oracle lu&ocirc;n dẫn đầu trong nhiều năm từ khi ra đời năm 1979. Điều c&oacute; thể n&oacute;i về Oracle l&agrave; &ldquo;hệ thống phức tạp nhưng mạnh mẽ&rdquo;. Oracle đang ph&aacute;t triển hướng đến m&ocirc; h&igrave;nh dữ liệu đ&aacute;m m&acirc;y trong phi&ecirc;n bản 12c, cho ph&eacute;p c&aacute;c c&ocirc;ng ty củng cố v&agrave; quản l&yacute; cơ sở dữ liệu như l&agrave; c&aacute;c dịch vụ đ&aacute;m m&acirc;y.</p>
<p>C&aacute;c phi&ecirc;n bản:</p>
<ul>
<li>Phi&ecirc;n bản 1 (năm 1977), Phi&ecirc;n bản 2 (năm 1979)</li>
<li>Phi&ecirc;n bản 3 (năm 1983), Phi&ecirc;n bản 4 (1984)</li>
<li>Phi&ecirc;n bản 5 ph&aacute;t h&agrave;nh năm 1985 (SQLNet: hệ thống kh&aacute;ch/chủ (client/server)).</li>
<li>Phi&ecirc;n bản 6 ph&aacute;t h&agrave;nh năm 1988 (Sequence, thao t&aacute;c ghi trễ).</li>
<li>Oracle7 được ph&aacute;t h&agrave;nh năm 1992 (SQL*DBA).</li>
<li>Năm 1999 Oracle giới thiệu Oracle8i (i:internet).</li>
<li>Năm 2001-2002: 2 phi&ecirc;n bản Oracle9i (Release 1&amp;2).</li>
<li>Năm 2004-2005: 2 phi&ecirc;n bản Oracle10g (g:Grid) (Release 1&amp;2).</li>
<li>Năm 2007 &ndash; 2009: 2 phi&ecirc;n bản 11g (Release 1&amp;2)</li>
<li>Năm 2013 &ndash; 2017: 2 phi&ecirc;n bản 12c (Release 1&amp;2)</li>
<li>Năm 2018: Phi&ecirc;n bản 18c</li>
</ul>
<p>C&aacute;c release phổ biến hiện nay (10g, 11g, 12c) c&oacute; 5 phi&ecirc;n bản sau :</p>
<ul>
<li>Oracle Database Express Edition (Oracle Database XE): l&agrave; phi&ecirc;n bản đơn giản nhất, download nhanh ch&oacute;ng, c&agrave;i đặt v&agrave; quản l&yacute; đơn giản, miễn ph&iacute; cho lập tr&igrave;nh, triển khai v&agrave; mở rộng.</li>
<li>Oracle Database Standard Edition One</li>
<li>Oracle Database Standard Edition</li>
<li>Oracle Database Enterprise Edition: l&agrave; phi&ecirc;n bản mạnh mẽ nhất, cung cấp nhiều t&iacute;nh năng bảo mật cao cấp, gi&uacute;p cho c&aacute;c c&ocirc;ng ty quản l&yacute; truy xuất c&aacute;c nguồn t&agrave;i nguy&ecirc;n v&agrave; dữ liệu một c&aacute;ch hữu hiệu v&agrave; tiện lợi hơn.</li>
<li>Oracle Database Personal Edition: l&agrave; một sản phẩm đặc biệt, c&oacute; chứa hầu hết c&aacute;c t&iacute;nh năng của Enterprise Edition (ngoại trừ Oracle Real Application Clusters), ph&ugrave; hợp cho m&ocirc;i trường ph&aacute;t triển v&agrave; triển khai một người d&ugrave;ng c&oacute; đ&ograve;i hỏi c&oacute; sự tương th&iacute;ch đầy đủ với c&aacute;c phi&ecirc;n bản kh&aacute;c của Oracle.</li>
</ul>',
                'file' => 'pdf/SQL Chương 2 Một số hệ quản trị CSDL.pdf',
                'created_at' => '2022-02-17 14:38:26',
                'updated_at' => '2022-02-17 14:38:26',
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 3,
                'title' => 'Chương 3 : hệ quản trị csdl SQL',
                'descriptif' => 'hệ quản trị csdl SQL',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&Aacute;df&agrave;</p>
<p>&nbsp;</p>
<p>
1. Các kiến thức tổng quan về CSDL
Một hệ CSDL (DB system) bao gồm một CSDL (Database) và một hệ quản trị CSDL
(DBMS)
CSDL (CSDL) là một tập hợp dữ liệu được tổ chức và lưu trữ theo một cấu trúc chặt chẽ
nhằm phục vụ nhiều đối tượng sử dụng với nhiều mục đích khác nhau.
Hệ quản trị CSDL (Database Management System - DBMS) là một công cụ phần mềm
tổng quát nhằm hỗ trợ việc lưu trữ, truy xuất và quản trị CSDL. Nó cung cấp cho người dùng
và ứng dụng một môi trường thuận tiện và sử dụng hiệu quả tài nguyên dữ liệu. Nói cách
khác, Hệ quản trị CSDL là phần mềm chuyên dụng để giải quyết tốt các tình huống mà CSDL
đặt ra như: bảo mật, cạnh tranh trong truy xuất.
Hình 1: Kiến trúc của một hệ quản trị CSDL
Giáo trình Hệ quản trị CSDL MS SQL Server 1
Khoa CNTT trường Cao đẳng nghề 3
2. Các giai đoạn phát triển của một hệ quản trị CSDL.
Những năm 1975-1976, IBM lần đầu tiên đưa ra hệ quản trị CSDL kiểu quan hệ mang tên
SYSTEM-R với ngôn ngữ giao tiếp CSDL là SEQUEL (Structured English QUEry
Language), đó một ngôn ngữ con để thao tác với CSDL.
Năm 1976 ngôn ngữ SEQUEL được cải tiến thành SEQUEL2. Khoảng năm 1978-1979
SEQUEL2 được cải tiến và đổi tên thành Ngôn ngữ truy vấn có cấu trúc (Structured
Query Language - SQL) và cuối năm 1979 được cải tiến thành SYSTEM-R.
Năm 1986 Viện Tiêu Chuẩn Quốc Gia Mỹ (American National Standards Institute - ANSI)
đã công nhận và chuẩn hóa ngôn ngữ SQL, và sau đó Tổ chức Tiêu chuẩn Thế giới
(International Standards Organization - ISO) cũng đã công nhận ngôn ngữ này. Đó là chuẩn
SQL-86.
Tới nay SQL đã qua 3 lần chuẩn hóa lại (1989, 1992, 1996) để mở rộng các phép toán và
tăng cường khả năng bảo mật và tính toàn vẹn dữ liệu.
Ngôn ngữ CSDL được cài đặt khác nhau đối tùy theo các hệ quản trị CSDL khác
nhau, tuy nhiên đều phải theo một chuẩn (Standard) nhất định. Hiện nay, đa phần các
ngôn ngữ truy vấn CSDL dựa trên chuẩn SQL-92.
3. Giới thiệu về mô hình Client/Server và các hệ quản trị CSDL phục vụ cho mô hình
Client/Server.
SQL là một hệ quản trị CSDL nhiều người dùng kiểu Client/Server. Đây là hệ thống cơ
bản dùng lưu trữ dữ liệu cho hầu hết các ứng dụng lớn hiện nay. Mô hình Client/Server trên
SQL được sử dụng để điều khiển tất cả các chức năng mà một hệ quản trị CSDL cung cấp
cho người dùng các khả năng
• Định nghĩa dữ liệu
• Truy xuất và thao tác dữ liệu
• Điều khiển truy cập
• Đảm bảo toàn vẹn dữ liệu
4. Các đặc trưng của mô hình Client/server
Một ứng dụng kiểu Client/Server bao gồm 2 phần: Một phần chạy trên Server (máy chủ)
và phần khác chạy trên các Workstations (máy trạm).
Hình 2: Mô hình Client/Server trên SQL Server
Giáo trình Hệ quản trị CSDL MS SQL Server 1
Khoa CNTT trường Cao đẳng nghề 4
Phần Server: (Máy chủ) chứa các CSDL, cung cấp các chức năng phục vụ cho việc tổ
chức và quản lý CSDL, cho phép nhiều người sử dụng cùng truy cập dữ liệu. Điều này không
chỉ tiết kiệm mà còn thể hiện tính nhất quán về mặt dữ liệu. Tất cả dữ liệu đều được truy xuất
thông qua server, không được truy xuất trực tiếp. Do đó, có độ bảo mật cao, tính năng chịu
lỗi, chạy đồng thời, sao lưu dự phòng…
Phần Client (Máy khách): Là các phần mềm chạy trên máy trạm cho phép người sử dụng
giao tiếp CSDL trên Server.
Hệ thống máy tính Client/Server có 5 mô hình kiến trúc dựa trên cấu hình phân tán về truy
nhập dữ liệu, gồm:
- Mô hình CSDL tập trung (Centralized database model)
- Mô hình CSDL theo kiểu file - server (File - server database model)
- Mô hình xử lý từng phần CSDL (Database extract proceSQL Servering model)
- Mô hình CSDL Client/Server (Client/Server database model)
- Mô hình CSDL phân tán (Distributed database model)
</p>',
                'file' => 'pdf/SQL Chương 3 MY SQL.pdf',
                'created_at' => '2022-02-17 14:40:00',
                'updated_at' => '2022-02-17 14:40:00',
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 3,
                'title' => 'Chuong 4 : SQL server
',
                'descriptif' => 'SQL server',
                'image' => 'lessons/default1.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p><strong>Microsoft SQL Server</strong>&nbsp;l&agrave; một hệ quản trị cơ sở dữ, cung cấp c&aacute;ch tổ chức dữ liệu bằng c&aacute;ch lưu ch&uacute;ng v&agrave;o c&aacute;c bảng. Dữ liệu quan hệ được lưu trữ trong c&aacute;c bảng v&agrave; c&aacute;c quan hệ đ&oacute; được định nghĩa giữa c&aacute;c bảng với nhau. Người d&ugrave;ng truy cập dữ liệu tr&ecirc;n Server th&ocirc;ng qua ứng dụng. Người quản trị CSDL truy cập Server trực tiếp để thực hiện c&aacute;c chức năng cấu h&igrave;nh, quản trị v&agrave; thực hiện c&aacute;c thao t&aacute;c bảo tr&igrave; CSDL. Ngo&agrave;i ra, SQL Server l&agrave; một CSDL c&oacute; khả năng mở rộng, nghĩa l&agrave; ch&uacute;ng c&oacute; thể lưu một lượng lớn dữ liệu v&agrave; hỗ trợ t&iacute;nh năng cho ph&eacute;p nhiều người d&ugrave;ng truy cập dữ liệu đồng thời. C&aacute;c phi&ecirc;n bản của SQL Server phổ biến hiện n&agrave;y tr&ecirc;n thị trường l&agrave; SQL Server 7.0, SQL Server 2000, SQL Server 2005, SQL Server 2008, ...</p>
<p>C&aacute;c phi&ecirc;n bản của SQL Server gồm 6 bản ch&iacute;nh dưới đ&acirc;y:</p>
<ul>
<li>Enterpise Manager: L&agrave; phi&ecirc;n bản đầy đủ của SQL Server c&oacute; thể chạy tr&ecirc;n 32CPU v&agrave; 64GB RAM. C&oacute; c&aacute;c dịch vụ ph&acirc;n t&iacute;ch dữ liệu Analysis Service.</li>
<li>Standard: Giống như Enterprise nhưng bị hạn chế một số t&iacute;nh năng cao cấp, c&oacute; thể chạy tr&ecirc;n 2CPU, 4GB RAM.</li>
<li>Personal: Phi&ecirc;n bản n&agrave;y chủ yếu để chạy tr&ecirc;n PC, n&ecirc;n c&oacute; thể chạy tr&ecirc;n c&aacute;c hệ điều h&agrave;nh Windows 9x, Windows XP, Windows 2000, Windows 2003...</li>
<li>L&agrave; phi&ecirc;n bản tương tự như Enterprise nhưng bị giới hạn bởi số user kết nối đến.</li>
<li>Desktop Engine: L&agrave; phi&ecirc;n bản một engine chỉ chạy tr&ecirc;n desktop v&agrave; kh&ocirc;ng c&oacute; giao diện người d&ugrave;ng (GUI), k&iacute;ch thước CSDL giới hạn bởi 2GB.</li>
<li>Win CE: Sử dụng cho c&aacute;c ứng dụng chạy tr&ecirc;n Windows CE.</li>
<li>Trial: Phi&ecirc;n bản d&ugrave;ng thử, bị giới hạn bởi thời gian.</li>
<li>SQL Client: L&agrave; phi&ecirc;n bản d&agrave;nh cho m&aacute;y kh&aacute;ch, khi thực hiện khai th&aacute;c sẽ thực hiện kết nối đến phi&ecirc;n bản SQL Server, phi&ecirc;n bản n&agrave;y cung cấp giao diện GUI khai th&aacute;c cho người sử dụng.</li>
<li>SQL Connectivity only: L&agrave; phi&ecirc;n bản sử dụng chỉ cho c&aacute;c ứng dụng để kết nối đến SQL Server, phi&ecirc;n bản n&agrave;y kh&ocirc;ng cung cấp c&ocirc;ng cụ GUI cho người d&ugrave;ng khai th&aacute;c SQL Server.</li>
</ul>',
                'file' => 'pdf/SQL Chương 4 SQL server.pdf',
                'created_at' => '2022-02-17 14:46:32',
                'updated_at' => '2022-02-17 14:46:32',
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 4,
                'title' => 'Chương 1 : Tổng quan về QTM',
                'descriptif' => 'Tổng quan về QTM',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><strong>Quản trị mạng m&aacute;y t&iacute;nh học g&igrave;?</strong></p>
<p>Học ng&agrave;nh Quản trị mạng m&aacute;y t&iacute;nh bạn sẽ được đ&agrave;o tạo chuy&ecirc;n s&acirc;u về: khoa học m&aacute;y t&iacute;nh, kỹ thuật m&aacute;y t&iacute;nh, hệ thống th&ocirc;ng tin, kỹ thuật phần mềm, mạng m&aacute;y t&iacute;nh v&agrave; truyền th&ocirc;ng,&hellip; C&ugrave;ng với đ&oacute; l&agrave; c&aacute;c kỹ năng nghiệp vụ cần thiết như:</p>
<p>+ Quản trị hệ thống</p>
<p>+ C&agrave;i đặt phần mềm</p>
<p>+ Hỗ trợ kỹ thuật</p>
<p>+ Cấu h&igrave;nh mạng, cấu h&igrave;nh hệ thống</p>
<p>+ Linux v&agrave; Unix</p>
<p>+ Tường lửa</p>
<p>+ L&ecirc;n kế hoạch, quản trị dự &aacute;n</p>
<p>+ Tổ chức, sắp xếp</p>
<p>+ Giải quyết sự cố</p>
<p><img class="alignnone wp-image-6652 size-full" src="https://caodangquoctehanoi.edu.vn/wp-content/uploads/2021/06/QTM-MT-1.jpg" sizes="(max-width: 800px) 100vw, 800px" srcset="https://caodangquoctehanoi.edu.vn/wp-content/uploads/2021/06/QTM-MT-1.jpg 800w, https://caodangquoctehanoi.edu.vn/wp-content/uploads/2021/06/QTM-MT-1-300x179.jpg 300w, https://caodangquoctehanoi.edu.vn/wp-content/uploads/2021/06/QTM-MT-1-768x458.jpg 768w, https://caodangquoctehanoi.edu.vn/wp-content/uploads/2021/06/QTM-MT-1-184x109.jpg 184w" alt="" width="800" height="477" /></p>
<p>Tại Trường Cao đẳng Quốc tế H&agrave; Nội, sinh vi&ecirc;n ng&agrave;nh Quản trị mạng m&aacute;y t&iacute;nh được trang bị đầy đủ kiến thức đại cương, kiến thức chuy&ecirc;n ng&agrave;nh. Đồng thời ch&uacute; trọng thực h&agrave;nh, ph&aacute;t triển c&aacute;c kỹ năng triển khai ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin, khả năng nắm bắt c&aacute;c xu thế c&ocirc;ng nghệ mới. Kh&ocirc;ng chỉ vậy, nh&agrave; trường đẩy mạnh hợp t&aacute;c với c&aacute;c doanh nghiệp để tạo điều kiện cho sinh vi&ecirc;n thực tập, tiếp cận việc l&agrave;m.<iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>',
                'file' => 'pdf/QTM Chương 1 Tổng quan.pdf',
                'created_at' => '2022-02-17 14:48:55',
                'updated_at' => '2022-02-17 14:48:55',
            ),
            5 => 
            array (
                'id' => 11,
                'course_id' => 4,
                'title' => 'Chuong 2 : Lên kế hoạch, quản trị dự án',
                'descriptif' => 'Lên kế hoạch, quản trị dự án',
                'image' => 'lessons/default0.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Gdsgdsgdsg</p>
<p>Sdgdsg</p>
<p>Sdgdsgdsg</p>
<p>Sdgdsg</p>
<p>Dsgdsgdsg</p>
<p>Sdgdsgdsg</p>',
                'file' => 'pdf/QTM Chương 2 Lên kế hoạch.pdf',
                'created_at' => '2022-02-17 14:56:34',
                'updated_at' => '2022-02-17 14:56:34',
            ),
            6 => 
            array (
                'id' => 12,
                'course_id' => 4,
                'title' => 'Chuong 3 : Giải quyết sự cố',
                'descriptif' => 'Giải quyết sự cố',
                'image' => 'lessons/default1.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Fds&agrave;dsgg</p>
<p>Dsgdsgdsg</p>
<p>Dsgdsgdsg</p>
<p>Dsgdsgds</p>
<p>Gdsgdsg</p>
<p>Dsgdsg</p>',
                'file' => 'pdf/QTM Chương 3 Giải quyết sự cố.pdf',
                'created_at' => '2022-02-17 14:57:10',
                'updated_at' => '2022-02-17 14:57:10',
            ),
            7 => 
            array (
                'id' => 13,
                'course_id' => 5,
                'title' => 'Chương 1 : tổng quan về phát luật VN',
                'descriptif' => 'tổng quan về phát luật VN',
                'image' => 'lessons/default0.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/hh5tBZ9yxcU" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Fdsfs&agrave;</p>
<p>&Agrave;</p>
<p>S&agrave;</p>
<p>Sa</p>
<p>Fsa</p>
<p>F</p>
<p>S&agrave;</p>
<p>S&agrave;</p>
<p>Sa</p>
<p>Fsa</p>
<p>F</p>
<p>Sf</p>',
                'file' => NULL,
                'created_at' => '2022-02-17 14:58:42',
                'updated_at' => '2022-02-17 14:58:42',
            ),
            8 => 
            array (
                'id' => 14,
                'course_id' => 5,
                'title' => 'Chuong 2 : Luật pháp hôn nhân',
                'descriptif' => 'Luật pháp hôn nhân',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/hh5tBZ9yxcU" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p style="font-weight: 400;"><strong>LUẬT</strong></p>
<p style="font-weight: 400;"><strong>H&Ocirc;N NH&Acirc;N V&Agrave; GIA Đ&Igrave;NH</strong></p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;">Gia đ&igrave;nh l&agrave; tế b&agrave;o của x&atilde; hội. Gia đ&igrave;nh tốt th&igrave; x&atilde; hội mới tốt, x&atilde; hội tốt th&igrave; gia đ&igrave;nh c&agrave;ng tốt.</p>
<p style="font-weight: 400;">Trong gia đ&igrave;nh x&atilde; hội chủ nghĩa, vợ chống b&igrave;nh đẳng, thương y&ecirc;u, gi&uacute;p đỡ nhau tiến bộ, tham gia t&iacute;ch cực v&agrave;o sự nghiệp x&acirc;y dựng chủ nghĩa x&atilde; hội v&agrave; bảo vệ Tổ quốc, c&ugrave;ng nhau nu&ocirc;i dạy con th&agrave;nh những c&ocirc;ng d&acirc;n c&oacute; &iacute;ch cho x&atilde; hội.</p>
<p style="font-weight: 400;">Kế thừa v&agrave; ph&aacute;t triển Luật h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh năm 1959, để tiếp tục x&acirc;y dựng v&agrave; củng cố gia đ&igrave;nh x&atilde; hội chủ nghĩa, giữ g&igrave;n v&agrave; ph&aacute;t huy những phong tục, tập qu&aacute;n tốt đẹp của d&acirc;n tộc, xo&aacute; bỏ những tục lệ lạc hậu, tập qu&aacute;n tốt đẹp của d&acirc;n tộc, xo&aacute; bỏ những tục lệ lạc hậu, những t&agrave;n t&iacute;ch của chế độ h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh ph&ograve;ng kiến, chống ảnh hưởng của chế độ h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh tư sản ;</p>
<p style="font-weight: 400;">Căn cứ v&agrave;o Điều 64 v&agrave; Điều 65 của Hiến ph&aacute;p nước Cộng ho&agrave; x&atilde; hội chủ nghĩa Việt Nam ;</p>
<p style="font-weight: 400;">Luật n&agrave;y quy định chế độ h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh.</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;">CHƯƠNG I. NHỮNG QUY ĐỊNH CHUNG</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;"><strong>Điều 1</strong></p>
<p style="font-weight: 400;">Nh&agrave; nước bảo đảm thực sự chế độ h&ocirc;n nh&acirc;n tự nguyện, tiến bộ, một vợ một chồng, vợ chồng b&igrave;nh đẳng, nhằm x&acirc;y dựng gia đ&igrave;nh d&acirc;n chủ, ho&agrave; thuận, hạnh ph&uacute;c, bền vững.</p>
<p style="font-weight: 400;">H&ocirc;n nh&acirc;n giữa c&ocirc;ng d&acirc;n Việt Nam thuộc c&aacute;c d&acirc;n tộc c&aacute;c t&ocirc;n gi&aacute;o kh&aacute;c nhau, giữa người theo t&ocirc;n gi&aacute;o với người kh&ocirc;ng theo t&ocirc;n gi&aacute;o được t&ocirc;n trọng v&agrave; bảo vệ.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 2</strong></p>
<p style="font-weight: 400;">Vợ chồng c&oacute; nghĩa vụ thực hiện sinh đẻ c&oacute; kế hoạch.</p>
<p style="font-weight: 400;">Cha mẹ c&oacute; nghĩa vụ nu&ocirc;i dạy con th&agrave;nh những c&ocirc;ng d&acirc;n c&oacute; &iacute;ch cho x&atilde; hội.</p>
<p style="font-weight: 400;">Con c&oacute; nghĩa vụ k&iacute;nh trọng, chăm s&oacute;c, nu&ocirc;i dưỡng cha mẹ.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 3</strong></p>
<p style="font-weight: 400;">Nh&agrave; nước v&agrave; x&atilde; hội bảo vệ b&agrave; mẹ v&agrave; trẻ em, gi&uacute;p đỡ c&aacute;c b&agrave; mẹ thực hiện tốt chức năng cao qu&yacute; của người mẹ.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 4</strong></p>
<p style="font-weight: 400;">Cấm tảo h&ocirc;n, cưỡng &eacute;p kết h&ocirc;n, cản trở h&ocirc;n nh&acirc;n tự nguyện, tiến bộ, y&ecirc;u s&aacute;ch của cải trong việc cưới hỏi ; cấm cưỡng &eacute;p ly h&ocirc;n.</p>
<p style="font-weight: 400;">Cấm người đang c&oacute; vợ, c&oacute; chồng kết h&ocirc;n hoặc chung sống như vợ chồng với người kh&aacute;c.</p>
<p style="font-weight: 400;">Cấm ngược đ&atilde;i, h&agrave;nh hạ cha, mẹ, vợ, chồng, con c&aacute;i.</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;">CHƯƠNG II. KẾT H&Ocirc;N</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;"><strong>Điều 5</strong></p>
<p style="font-weight: 400;">Nam từ 20 tuổi trở l&ecirc;n, nữ từ 18 tuổi trở l&ecirc;n mới được kết h&ocirc;n.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 6</strong></p>
<p style="font-weight: 400;">Việc kết h&ocirc;n do nam nữ tự nguyện quyết định, kh&ocirc;ng b&ecirc;n n&agrave;o được &eacute;p buộc b&ecirc;n n&agrave;o, kh&ocirc;ng ai được cưỡng &eacute;p hoặc cản trở.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 7</strong></p>
<p style="font-weight: 400;">Cấm kết h&ocirc;n trong những trường hợp sau đ&acirc;y :</p>
<ol>
<li style="font-weight: 400;">a) Đang c&oacute; vợ hoặc c&oacute; chồng ;</li>
<li style="font-weight: 400;">b) Đang mắc bệnh t&acirc;m thần kh&ocirc;ng c&oacute; khả năng nhận thức h&agrave;nh vi của m&igrave;nh ; đang mắc bệnh hoa liễu ;</li>
<li style="font-weight: 400;">c) Giữa những người c&ugrave;ng d&ograve;ng m&aacute;u về trực hệ ; giữa anh chị em c&ugrave;ng cha mẹ, c&ugrave;ng cha kh&aacute;c mẹ hoặc c&ugrave;ng mẹ kh&aacute;c cha ; giữa những người kh&aacute;c c&oacute; họ trong phạm vi ba đời ;</li>
<li style="font-weight: 400;">d) Giữa cha, mẹ nu&ocirc;i với con nu&ocirc;i.</li>
</ol>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 8</strong></p>
<p style="font-weight: 400;">Việc kết h&ocirc;n do Uỷ ban nh&acirc;n d&acirc;n x&atilde;, phường, thị trấn nơi thường tr&uacute; của một trong hai người kết h&ocirc;n c&ocirc;ng nhận v&agrave; ghi v&agrave;o sổ kết h&ocirc;n theo nghi thức do Nh&agrave; nước quy định.</p>
<p style="font-weight: 400;">Việc kết h&ocirc;n giữa c&ocirc;ng d&acirc;n Việt Nam với nhau ở ngo&agrave;i nước do cơ quan đại diện ngoại giao của nước Cộng ho&agrave; x&atilde; hội chủ nghĩa Việt Nam c&ocirc;ng nhận.</p>
<p style="font-weight: 400;">Mọi nghi thức kết h&ocirc;n kh&aacute;c đều kh&ocirc;ng c&oacute; gi&aacute; trị ph&aacute;p l&yacute;.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 9</strong></p>
<p style="font-weight: 400;">Việc kết h&ocirc;n vi phạm một trong c&aacute;c Điều 5, 6, 7 của Luật n&agrave;y l&agrave; tr&aacute;i ph&aacute;p luật.</p>
<p style="font-weight: 400;">Một hoặc hai b&ecirc;n đ&atilde; kết h&ocirc;n tr&aacute;i ph&aacute;p luật, vợ, chồng hoặc con của người đang c&oacute; vợ, c&oacute; chồng m&agrave; kết h&ocirc;n với người kh&aacute;c, Viện kiểm s&aacute;t nh&acirc;n d&acirc;n, Hội li&ecirc;n hiệp phụ nữa Việt Nam, Đo&agrave;n thanh ni&ecirc;n cộng sản Hồ Ch&iacute; Minh, C&ocirc;ng đo&agrave;n Việt Nam c&oacute; quyền y&ecirc;u cầu To&agrave; &aacute;n nh&acirc;n d&acirc;n huỷ việc kết h&ocirc;n tr&aacute;i ph&aacute;p luật.</p>
<p style="font-weight: 400;">T&agrave;i sản của những người m&agrave; h&ocirc;n nh&acirc;n bị huỷ được giải quyết theo nguy&ecirc;n tắc : t&agrave;i sản ri&ecirc;ng của ai th&igrave; vẫn thuộc quyền sở hữu của người ấy ; t&agrave;i sản chung được chia căn cứ v&agrave;o c&ocirc;ng sức đ&oacute;ng g&oacute;p của mỗi b&ecirc;n ; quyền lợi ch&iacute;nh đ&aacute;ng của b&ecirc;n bị lừa dối hoặc bị cưỡng &eacute;p kết h&ocirc;n được bảo vệ.</p>
<p style="font-weight: 400;">Quyền lợi của con được giải quyết như trong trường hợp cha mẹ ly h&ocirc;n.</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;">CHƯƠNG III. NGHĨA VỤ V&Agrave; QUYỀN CỦA VỢ, CHỒNG</p>
<p style="font-weight: 400;">&nbsp;</p>
<p style="font-weight: 400;"><strong>Điều 10</strong></p>
<p style="font-weight: 400;">Vợ, chồng c&oacute; nghĩa vụ v&agrave; quyền ngang nhau về mọi mặt trong gia đ&igrave;nh.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 11</strong></p>
<p style="font-weight: 400;">Vợ, chồng c&oacute; nghĩa vụ chung thuỷ với nhau, thương y&ecirc;u, qu&yacute; trọng, chăm s&oacute;c, gi&uacute;p đỡ nhau tiến bộ, c&ugrave;ng nhau thực hiện sinh đẻ c&oacute; kế hoạch.</p>
<p style="font-weight: 400;">Chồng c&oacute; nghĩa vụ tạo điều kiện cho vợ thực hiện tốt chức năng của người mẹ.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 12</strong></p>
<p style="font-weight: 400;">Vợ, chồng c&oacute; quyền tự do chọn nghề nghiệp ch&iacute;nh đ&aacute;ng, tham gia c&aacute;c c&ocirc;ng t&aacute;c ch&iacute;nh trị, kinh tế, văn ho&aacute; v&agrave; x&atilde; hội.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 13</strong></p>
<p style="font-weight: 400;">Chỗ ở của vợ chồng do vợ chồng lựa chọn, kh&ocirc;ng bị r&agrave;ng buộc bởi phong tục, tập qu&aacute;n.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 14</strong></p>
<p style="font-weight: 400;">T&agrave;i sản chung của vợ chồng gồm t&agrave;i sản do vợ hoặc chồng tạo ra, thu nhập về nghề nghiệp v&agrave; những thu nhập hợp ph&aacute;p kh&aacute;c của vợ chồng trong thời kỳ h&ocirc;n nh&acirc;n, t&agrave;i sản m&agrave; vợ chồng được thừa kế chung hoặc được cho chung.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 15</strong></p>
<p style="font-weight: 400;">T&agrave;i sản chung được sử dụng để bảo đảm những nhu cầu chung của gia đ&igrave;nh.</p>
<p style="font-weight: 400;">Vợ, chồng c&oacute; quyền v&agrave; nghĩa vụ ngang nhau đối với t&agrave;i sản chung. Việc mua b&aacute;n, đổi, cho, vay, mượn, v&agrave; những giao dịch kh&aacute;c c&oacute; quan hệ đến t&agrave;i sản m&agrave; c&oacute; gi&aacute; trị lớn th&igrave; phải được sự thoả thuận của vợ, chồng.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 16</strong></p>
<p style="font-weight: 400;">Đối với t&agrave;i sản m&agrave; vợ hoặc chồng c&oacute; trước khi kết h&ocirc;n, t&agrave;i sản được thừa kế ri&ecirc;ng hoặc được cho ri&ecirc;ng trong thời kỳ h&ocirc;n nh&acirc;n th&igrave; người c&oacute; t&agrave;i sản đ&oacute; c&oacute; quyền nhập hoặc kh&ocirc;ng nhập v&agrave;o khối t&agrave;i sản chung của vợ chồng.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 17</strong></p>
<p style="font-weight: 400;">Khi một b&ecirc;n chết trước, nếu cần chia t&agrave;i sản chung của vợ chồng th&igrave; chia đ&ocirc;i. Phần t&agrave;i sản của người chết được chia theo quy định của ph&aacute;p luật về thừa kế.</p>
<p style="font-weight: 400;">Vợ, chồng c&oacute; quyền thừa kế t&agrave;i sản của nhau.</p>
<p style="font-weight: 400;"><strong>&nbsp;</strong></p>
<p style="font-weight: 400;"><strong>Điều 18</strong></p>
<p style="font-weight: 400;">Khi h&ocirc;n nh&acirc;n tồn tại, nếu một b&ecirc;n y&ecirc;u cầu v&agrave; c&oacute; l&yacute; do ch&iacute;nh đ&aacute;ng, th&igrave; c&oacute; thể chia t&agrave;i sản chung của vợ chồng theo quy định ở Điều 42 của Luật n&agrave;y.</p>',
'file' => NULL,
'created_at' => '2022-02-17 14:59:52',
'updated_at' => '2022-02-17 14:59:52',
),
9 => 
array (
'id' => 15,
'course_id' => 6,
'title' => 'Nguyên lý HĐH',
'descriptif' => 'tổng quan về HĐH',
'image' => 'lessons/default2.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/YILh1dduI8E?list=PLZEIt444jqpD0tZv9KgsCsDHOML7QRLIN" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>R&otilde; r&agrave;ng hệ điều h&agrave;nh l&agrave; một thứ kh&ocirc;ng thể thiếu trong m&aacute;y t&iacute;nh c&aacute; nh&acirc;n hiện nay. Hệ điều h&agrave;nh điều khiển mọi hoạt động của m&aacute;y t&iacute;nh từ những c&ocirc;ng việc đơn giản cho tới phức tạp. Hệ điều h&agrave;nh l&agrave; m&ocirc;i trường để c&aacute;c phần mềm c&oacute; thể hoạt động v&agrave; chạy tr&ecirc;n đ&oacute;. Hệ điều h&agrave;nh sẽ t&iacute;nh to&aacute;n để ph&acirc;n bổ t&agrave;i nguy&ecirc;n cho c&aacute;c tiến tr&igrave;nh cho hợp l&iacute; để cho mọi thứ c&oacute; thể hoạt động một c&aacute;ch ho&agrave;n hảo nhất.</p>
<p>Chung quy lại th&igrave; hệ điều h&agrave;nh chỉ l&agrave; một phần mềm hệ thống, n&oacute; tạo ra một m&ocirc;i trường m&agrave; c&aacute;c phần mềm c&oacute; thể hoạt động tr&ecirc;n n&oacute;. Hệ điều h&agrave;nh đ&oacute;ng vai tr&ograve; chung gian giữa người sử dụng v&agrave; m&aacute;y t&iacute;nh, che giấu đi những phần phức tạp để việc sử dụng m&aacute;y t&iacute;nh trở l&ecirc;n đơn giản v&agrave; hiệu quả hơn.</p>
<div class="separator"><a href="https://1.bp.blogspot.com/-N9CYW91BeOE/Xz-LcguSaeI/AAAAAAAAA8s/jX_8CfdkdZ0kQWq2D7IBnFSmHGUsljvdwCPcBGAYYCw/s2040/soict.png"><img src="https://1.bp.blogspot.com/-N9CYW91BeOE/Xz-LcguSaeI/AAAAAAAAA8s/jX_8CfdkdZ0kQWq2D7IBnFSmHGUsljvdwCPcBGAYYCw/s320/soict.png" height="320" border="0" data-original-height="2040" data-original-width="2040" /></a></div>
<p>Phải n&oacute;i l&agrave; học m&ocirc;n n&agrave;y bạn sẽ biết được l&agrave; những lập tr&igrave;nh vi&ecirc;n hệ điều h&agrave;nh họ giỏi v&agrave; tỉ mỉ như thế n&agrave;o. Từng chi tiết nhỏ cũng sẽ ảnh hưởng phần n&agrave;o tới năng suất l&agrave;m việc của m&aacute;y t&iacute;nh v&igrave; thế lập tr&igrave;nh vi&ecirc;n hệ điều h&agrave;nh phải tỉ mỉ từng t&iacute; để c&oacute; thể c&oacute; được một hệ điều h&agrave;nh hoạt động trơn chu. Học xong m&ocirc;n học c&aacute;c bạn cũng c&oacute; thể biết về&nbsp;<strong>nguy&ecirc;n l&yacute; để thiết kế một h&ecirc; điều h&agrave;nh</strong>&nbsp;v&agrave; bi&ecirc;t đ&acirc;u sau n&agrave;y một trong mọi người lại thiết kế ra một hệ điều h&agrave;nh c&oacute; thể đ&aacute;nh bật Windows hay Linux.</p>
<p>Dĩ nhi&ecirc;n l&agrave; chỉ một m&ocirc;n học kh&ocirc;ng thể n&agrave;o học hết được mọi thứ về hệ điều h&agrave;nh, nhưng m&ocirc;n học cung cấp cho bạn c&aacute;i nh&igrave;n tổng quan nhất về :&nbsp;</p>
<p>&nbsp;</p>
<ul>
<li>Kh&aacute;i niệm về hệ điều h&agrave;nh&nbsp;</li>
<li>Quản l&yacute; tiến tr&igrave;nh&nbsp;</li>
<li>Quản l&yacute; bộ nhớ</li>
<li>Quản l&yacute; hệ thống file</li>
<li>Quản l&yacute; v&agrave;o ra</li>
</ul>',
'file' => NULL,
'created_at' => '2022-02-17 15:03:46',
'updated_at' => '2022-02-17 15:03:46',
),
10 => 
array (
'id' => 16,
'course_id' => 9,
'title' => 'Chương 1 : Khái niệm cơ bản về HTML',
'descriptif' => 'Khái niệm cơ bản về HTML',
'image' => 'lessons/default0.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/GArJ0EPu77w" width="560" height="314" allowfullscreen="allowfullscreen"></iframe>&Egrave;</p>
<p>Ewfhưgiưhgiuhiwughiug</p>
<p>Ưegewjghiwueg</p>
<p>Ưegưe</p>
<p>Gưe</p>
<p>G</p>
<p>Rhy</p>
<p>Rtjrtjrty</p>
<p>Jrt</p>
<p>J</p>
<p>Rtj</p>
<p>Rtj</p>
<p>Sgfj</p>
<p>Gf</p>
<p>J</p>
<p>&nbsp;</p>',
'file' => NULL,
'created_at' => '2022-02-17 15:05:22',
'updated_at' => '2022-02-17 15:05:22',
),
11 => 
array (
'id' => 17,
'course_id' => 10,
'title' => 'Chương 1 : Tổng quan',
'descriptif' => 'Tổng quan',
'image' => 'lessons/default2.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/RN8UgMsXRlI?list=PLnRl-W3gZI79kfp8E7lcDkImtMHA6FIfr" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Ư&egrave;</p>
<p>Ew</p>
<p>F</p>
<p>Ewf</p>
<p>Ưe</p>
<p>F</p>
<p>Ew</p>
<p>Fe</p>
<p>Ừ</p>
<p>Ưe</p>
<p>F</p>
<p>Ư&egrave;</p>
<p>&nbsp;</p>',
'file' => NULL,
'created_at' => '2022-02-17 15:06:27',
'updated_at' => '2022-02-17 15:06:27',
),
12 => 
array (
'id' => 18,
'course_id' => 16,
'title' => 'Chương 1 : Tổng quan',
'descriptif' => 'aaaaaaa',
'image' => 'lessons/default1.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/rSJAixS-vZs?list=PLFrigdg6S6B6RGQmsOEP4YbB7RTlXUnR4" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p>Ư&egrave;</p>
<p>Ưe</p>
<p>F</p>
<p>Ưe</p>
<p>Fwe</p>
<p>F</p>
<p>Ew</p>
<p>F</p>
<p>Ư&egrave;</p>
<p>&nbsp;</p>',
'file' => NULL,
'created_at' => '2022-02-17 15:07:17',
'updated_at' => '2022-02-17 15:07:17',
),
13 => 
array (
'id' => 19,
'course_id' => 17,
'title' => 'Chương 1 : tổng quan về àn toàn CSDL',
'descriptif' => 'tổng quan về àn toàn CSDL',
'image' => 'lessons/default1.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/XByLb__xhLk" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>',
'file' => NULL,
'created_at' => '2022-02-17 15:08:05',
'updated_at' => '2022-02-17 15:08:05',
),
14 => 
array (
'id' => 20,
'course_id' => 3,
'title' => 'Chuong 5 : Tổng kết',
'descriptif' => 'tổng kết',
'image' => 'lessons/default0.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>
TOP 5 giáo trình hệ quản trị cơ sở dữ liệu
Sau khi tìm hiểu về những kiến thức trong phần trên, không quá khó để chúng ta nhận ra tầm quan trọng cũng như mức độ phổ biến của các giáo trình hệ quản trị cơ sở dữ liệu. Mặc dù theo một số thống kê cho thấy hiện nay, có đến hơn 300 hệ quản trị CSDL khác nhau, tuy nhiên, chỉ có khoản hơn 10 giáo trình hệ quản trị cơ sở dữ liệu được sử dụng phổ biến trên thế giới hơn cả để cải thiện khả năng lý dữ liệu cho các ứng dụng công nghệ thông tin, các phần mềm máy tính hay website,… Cùng chúng tôi điểm danh Top 10 hệ quản trị CSDL phổ biến nhất sau đây nhé!

1. Hệ CSDL Oracle
Là một DBMS thương mại. Nó được đánh giá là hệ CSDL quan hệ đối tượng được sử dụng rộng rãi nhất hiện nay, “đánh bật” cả các “anh lớn” như MySQL, Microsoft SQL Server,… ra khỏi vị trí dẫn đầu. Khởi đầu với phần mềm quản trị cơ sở dữ liệu từ cách đây hơn 50 năm, cho đến hiện tại, ngoài Oracle Database Server, Oracle còn cung cấp khá nhiều sản phẩm khác để phục vụ cho các doanh nghiệp.

Một số tính năng cơ bản:

Được bảo mật
Hoạt động trên Windows, Linux, UNIX
Ít chiếm không gian
Hỗ trợ được cho cơ sở dữ liệu lớn, giảm thời gian CPU xử lý dữ liệu
2. Giáo trình hệ quản trị cơ sở dữ liệu
Là một hệ quản trị CSDL thương mại khác, sử dụng mã nguồn mở. Hệ cơ sở dữ liệu này rất phổ biến, và thường được các.chuyên gia lập trình web ưa chuộng sử dụng trong quá.trình phát triển các ứng dụng hay website. Với ưu điểm về tốc độ cũng như tính bảo mật được đánh giá cao,.MySQL thích hợp với các ứng dụng có truy cập cơ sở dữ liệu trên Internet.

giao trinh he quan tri co so du lieu
giao trinh he quan tri co so du lieu
Một số tính năng cơ bản:

Hoạt động trên Windows, Linux
Tốc độ xử lý dữ liệu cao
Sử dụng trình kích hoạt tăng năng suất và nhiều tính năng
Có thể khôi phục dữ liệu nếu cần
Với những ưu điểm của mình, giáo trình hệ quản trị cơ sở dữ liệu mySQL trở.thành một trong những lựa chọn hàng đầu của các công ty.thiết kế website, đặc biệt là Mona Media – Một công ty chuyên thiết kế.và lập trình web đã ứng dụng mySQL trong hầu hết những website của mình và mang.đến những trải nghiệm website tuyệt vời hơn cho khách hàng.

3. Hệ CSDL Microsoft SQL Server
Microsoft SQL Server luôn luôn là một cái tên có mặt trong Top hầu hết các bảng xếp hạng hệ quản trị CSDL phổ biến nhất. Được phát triển từ năm 1989, sử dụng ngôn ngữ Assembly C, Linux , C ++, đây là một DBMS thương mại được rất nhiều người yêu thích và lựa chọn sử dụng bởi những tiện ích của nó.



Một số tính năng cơ bản:

Hoạt động trên hệ điều hành Windows và Linux
Tương thích với Oracle
Cung cấp, quản lý hiệu quả khối lượng của công việc
Cho phép nhiều người dùng sử dụng chung một cơ sở dữ liệu
4. PostgreSQL
Đứng Top 4 trong bảng xếp hạng các giáo trình hệ quản trị cơ sở dữ liệu phổ.biến nhất, PostgreSQL cũng là một công cụ nguồn mở khá quen thuộc. Đây là một cơ sở dữ liệu nâng cao hơn, hỗ trợ tốt cho việc lưu.trữ dữ liệu không gian. Với sự kết hợp cùng module PostGIS, PostgreSQL.cho phép người sử dụng khả năng lưu trữ các.lớp dữ liệu không gian một cách hiệu quả.

Một số tính năng cơ bản:

Sử dụng cơ sở dữ liệu quan hệ đối tượng
Hoạt động trên các hệ điều hành Windows và Linux
Truy xuất dữ liệu tốc độ nhanh
Chia sẻ dữ liệu qua trang tổng quan nhanh hơn
Đảm bảo an toàn dữ liệu
5. MongoDB
Nếu bạn tìm kiếm một công cụ nguồn mở được sử dụng phổ.biến hàng đầu hiện nay, MongoDB chắc chắn sẽ không.làm bạn thất vọng. Đây là một cơ sở dữ liệu có khả năng xử lý một lượng dữ.liệu lớn, nhưng cũng đồng thời cho phép bạn sử dụng bộ nhớ trong.để có thể truy cập dữ liệu một cách dễ dàng hơn.

giao trinh he quan tri co so du lieu
giao trinh he quan tri co so du lieu
Một số tính năng cơ bản:

Dùng cơ chế NoSQL để truy vấn, viết bằng ngôn ngữ C++
Việc chia tỷ lệ có thể thực hiện dễ dàng
Sử dụng các phép nối phức tạp không có sẵn
Lời kết

Mỗi hệ quản trị CSDL trên nói chung và hầu hết các DBMS.khác nói riêng sẽ đều có những tính năng, ưu điểm nhất định. Tùy theo yêu cầu về dữ liệu khác nhau của mỗi người mà chúng ta có.thể đánh giá rằng các hệ quản trị cơ sở trên liệu có phù hợp và hữu ích hay không.

Hi vọng rằng sau những thông tin về Top 5 giáo trình hệ quản trị cơ sở dữ liệu.phổ biến nhất mà chúng tôi đã tổng hợp và cung cấp trong bài viết.trên, bạn sẽ “bỏ túi” thêm nhiều kiến thức để ứng dụng cho công việc,.và thỏa mãn những đam mê về công nghệ của bản thân mình.

Tìm kiếm liên quan

Đâu không phải chức năng của hệ quản trị cơ sở dữ liệu
Hệ quản trị cơ sở dữ liệu dụng khóa để làm gì
Giáo trình hệ quản trị cơ sở dữ liệu
Nội dung liên quan

Cách bước lập kế hoạch Marketing cho sản phẩm đạt hiệu quả cao
Những bước chiến lược chiêu thị quan trọng trong ngành bán lẻ
Marketing Specialist là gì? Kỹ năng cần có của người làm Marketing Specialist
</p>',
'file' => 'pdf/SQL Chương 5 Tổng kết.pdf',
'created_at' => '2022-02-17 15:09:21',
'updated_at' => '2022-02-17 15:09:21',
),
15 => 
array (
'id' => 21,
'course_id' => 4,
'title' => 'Chuong 4 : Cài đặt phần mềm , môi trường',
'descriptif' => 'Cài đặt phần mề và môi trường',
'image' => 'lessons/default0.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p>Một số phần mềm cơ bản người học n&ecirc;n sử dụng</p>',
'file' => 'pdf/QTM Chương 4 Cài đặ PM.pdf',
'created_at' => '2022-02-17 15:46:57',
'updated_at' => '2022-02-17 15:46:57',
),
16 => 
array (
'id' => 22,
'course_id' => 4,
'title' => 'Chuong 5 : Cài đặt cáu hình mạng, hệ thống',
'descriptif' => 'Cấu hình mạng, cấu hình hệ thống',
'image' => 'lessons/default2.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>Sơ đồ&nbsp;hệ thống mạng một đường</p>
<p><img src="https://www.daihockhonggiay.com/Network/1/18.jpg" /></p>
<p>1. Đặt địa chỉ IP cho 2 PC v&agrave; Server</p>
<table width="523">
<tbody>
<tr>
<td>
<p>PC0</p>
</td>
<td>
<p>Server IP</p>
</td>
</tr>
<tr>
<td>
<p>IP Address: 192.168.1.10</p>
</td>
<td>
<p>IP Address: 8.8.8.8</p>
</td>
</tr>
<tr>
<td>
<p>Subnet Mask:255.255.255.0</p>
</td>
<td>
<p>Subnet Mask:255.255.255.0</p>
</td>
</tr>
<tr>
<td>
<p>Default Gateway:192.168.1.1</p>
</td>
<td>
<p>Default Gateway:8.8.8.1</p>
</td>
</tr>
<tr>
<td>
<p>DNS Server: 8.8.8.8</p>
</td>
<td>
<p>DNS Server: 8.8.8.8</p>
</td>
</tr>
<tr>
<td>
<p>PC1</p>
</td>
<td>
<p>Chỉnh DNS On</p>
</td>
</tr>
<tr>
<td>
<p>IP Address: 192.168.2.10</p>
</td>
<td>
<p>Name: google.com</p>
</td>
</tr>
<tr>
<td>
<p>Subnet Mask:255.255.255.0</p>
</td>
<td>
<p>Address: 8.8.8.8</p>
</td>
</tr>
<tr>
<td>
<p>Default Getway:192.168.2.1</p>
</td>
<td>
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td>
<p>DNS Server: 8.8.8.8</p>
</td>
<td>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p>2. Cấu h&igrave;nh Switch&nbsp;</p>
<p>a. Cấu h&igrave;nh cơ bản Switch</p>
<p>Switch&gt;enable</p>
<p>Switch#configure terminal</p>
<p>Switch(config)#hostname SW0</p>
<p>SW0(config)#line console 0</p>
<p>SW0(config-line)#password dainam</p>
<p>SW0(config-line)#login</p>
<p>SW0(config-line)#exit</p>
<p>SW0(config)#line vty 0 4</p>
<p>SW0(config-line)#password dainam</p>
<p>SW0(config-line)#login</p>
<p>SW0(config-line)#exit</p>
<p>SW0(config)#ban motd "XINCHAO"</p>
<p>SW0(config)#enable secret dainam</p>
<p>SW0(config)#service password-encryption (m&atilde; h&oacute;a tất cả mật khẩu)</p>
<p>b. Cấu h&igrave;nh VLAN</p>
<p>SW0(config)#vlan 10</p>
<p>SW0(config-vlan)#name IT</p>
<p>SW0(config-vlan)#Vlan 20</p>
<p>SW0(config-vlan)#name Sale</p>
<p>SW0(config-vlan)#exit</p>
<p>SW0(config)#interface range f0/1-10</p>
<p>SW0(config-if-range)#switchport access vlan 10</p>
<p>SW0(config-if-range)#exit</p>
<p>SW0(config)#interface range f0/11-20</p>
<p>SW0(config-if-range)#switchport access vlan 20</p>
<p>SW0(config-if-range)#exit</p>
<p>SW0(config)#int g1/1</p>
<p>SW0(config-if)#switchport mode trunk</p>
<p>SW0(config-if)#end</p>
<p>SW0#wr (lưu lại cấu h&igrave;nh)</p>',
'file' => 'pdf/QTM Chương 5 Cấu hình Mạng.pdf',
'created_at' => '2022-02-17 15:49:10',
'updated_at' => '2022-02-17 15:49:10',
),
));
        
        
    }
}