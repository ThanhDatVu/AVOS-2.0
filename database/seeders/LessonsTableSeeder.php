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
                'title' => 'Chương 1',
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
                'created_at' => '2022-02-17 14:35:22',
                'updated_at' => '2022-02-17 14:35:22',
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 3,
                'title' => 'Chuong 2',
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
                'created_at' => '2022-02-17 14:38:26',
                'updated_at' => '2022-02-17 14:38:26',
            ),
            2 => 
            array (
                'id' => 3,
                'course_id' => 3,
                'title' => 'Chương 3',
                'descriptif' => 'hệ quản trị csdl SQL',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&Aacute;df&agrave;</p>
<p>&nbsp;</p>',
                'created_at' => '2022-02-17 14:40:00',
                'updated_at' => '2022-02-17 14:40:00',
            ),
            3 => 
            array (
                'id' => 4,
                'course_id' => 3,
                'title' => 'Chuong 4',
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
                'created_at' => '2022-02-17 14:46:32',
                'updated_at' => '2022-02-17 14:46:32',
            ),
            4 => 
            array (
                'id' => 5,
                'course_id' => 4,
                'title' => 'Chương 1',
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
                'created_at' => '2022-02-17 14:48:55',
                'updated_at' => '2022-02-17 14:48:55',
            ),
            5 => 
            array (
                'id' => 6,
                'course_id' => 1,
                'title' => 'Chuong 2',
                'descriptif' => 'Cài đặt phần mề và môi trường',
                'image' => 'lessons/default0.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Một số phần mềm cơ bản người học n&ecirc;n sử dụng</p>',
                'created_at' => '2022-02-17 14:52:00',
                'updated_at' => '2022-02-17 14:52:00',
            ),
            6 => 
            array (
                'id' => 7,
                'course_id' => 1,
                'title' => 'Chuong 3',
                'descriptif' => 'Cấu hình mạng, cấu hình hệ thống',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
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
                'created_at' => '2022-02-17 14:53:17',
                'updated_at' => '2022-02-17 14:53:17',
            ),
            7 => 
            array (
                'id' => 8,
                'course_id' => 1,
                'title' => 'Chuong 3',
                'descriptif' => 'Cấu hình mạng, cấu hình hệ thống',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
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
                'created_at' => '2022-02-17 14:53:55',
                'updated_at' => '2022-02-17 14:53:55',
            ),
            8 => 
            array (
                'id' => 9,
                'course_id' => 4,
                'title' => 'Chuong 2',
                'descriptif' => 'Cài đặt phần mề và môi trường',
                'image' => 'lessons/default0.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Một số phần mềm cơ bản người học n&ecirc;n sử dụng</p>',
                'created_at' => '2022-02-17 14:54:24',
                'updated_at' => '2022-02-17 14:54:24',
            ),
            9 => 
            array (
                'id' => 10,
                'course_id' => 4,
                'title' => 'Chuong 3',
                'descriptif' => 'Cài đặt phần mề và môi trường',
                'image' => 'lessons/default2.png',
                'objectif' => '8',
                'contenu' => '<p><iframe src="//www.youtube.com/embed/DJMWMp850SE?list=PLSzZlHir9jJSf7X0I_P7wuHh4WTDZGDN6" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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
                'created_at' => '2022-02-17 14:55:31',
                'updated_at' => '2022-02-17 14:55:31',
            ),
            10 => 
            array (
                'id' => 11,
                'course_id' => 4,
                'title' => 'Chuong 4',
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
                'created_at' => '2022-02-17 14:56:34',
                'updated_at' => '2022-02-17 14:56:34',
            ),
            11 => 
            array (
                'id' => 12,
                'course_id' => 4,
                'title' => 'Chuong 5',
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
                'created_at' => '2022-02-17 14:57:10',
                'updated_at' => '2022-02-17 14:57:10',
            ),
            12 => 
            array (
                'id' => 13,
                'course_id' => 5,
                'title' => 'Chương 1',
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
                'created_at' => '2022-02-17 14:58:42',
                'updated_at' => '2022-02-17 14:58:42',
            ),
            13 => 
            array (
                'id' => 14,
                'course_id' => 5,
                'title' => 'Chuong 2',
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
'created_at' => '2022-02-17 14:59:52',
'updated_at' => '2022-02-17 14:59:52',
),
14 => 
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
'created_at' => '2022-02-17 15:03:46',
'updated_at' => '2022-02-17 15:03:46',
),
15 => 
array (
'id' => 16,
'course_id' => 9,
'title' => 'Chương 1',
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
'created_at' => '2022-02-17 15:05:22',
'updated_at' => '2022-02-17 15:05:22',
),
16 => 
array (
'id' => 17,
'course_id' => 10,
'title' => 'Chương 1',
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
'created_at' => '2022-02-17 15:06:27',
'updated_at' => '2022-02-17 15:06:27',
),
17 => 
array (
'id' => 18,
'course_id' => 16,
'title' => 'Chương 1',
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
'created_at' => '2022-02-17 15:07:17',
'updated_at' => '2022-02-17 15:07:17',
),
18 => 
array (
'id' => 19,
'course_id' => 17,
'title' => 'Chương 1',
'descriptif' => 'tổng quan về àn toàn CSDL',
'image' => 'lessons/default1.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/XByLb__xhLk" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>',
'created_at' => '2022-02-17 15:08:05',
'updated_at' => '2022-02-17 15:08:05',
),
19 => 
array (
'id' => 20,
'course_id' => 3,
'title' => 'Chuong 5',
'descriptif' => 'tổng kết',
'image' => 'lessons/default0.png',
'objectif' => '8',
'contenu' => '<p><iframe src="//www.youtube.com/embed/Qvzxh7lR_O8?list=PLMxBWNFEl3lZl-4fBZDb4R-iRSgPXI4og&amp;index=2" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>',
'created_at' => '2022-02-17 15:09:21',
'updated_at' => '2022-02-17 15:09:21',
),
));
        
        
    }
}