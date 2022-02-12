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
                'course_id' => 1,
                'title' => 'Chương 1',
                'descriptif' => 'bùm',
                'image' => 'lessons/default1.png',
                'objectif' => 'mục tiêu',
                'contenu' => '<p>Chương 1&nbsp;</p>
<p>&nbsp;</p>
<p>Goo BRRRRRRRRRRRRRRRRRRRRR</p>',
                'created_at' => '2022-02-08 20:01:11',
                'updated_at' => '2022-02-08 20:01:11',
            ),
            1 => 
            array (
                'id' => 2,
                'course_id' => 1,
                'title' => 'Chương 1',
                'descriptif' => 'chương này tập chung vào giới thiệu tổng quan về Khoa học máy tính',
                'image' => 'lessons/default1.png',
                'objectif' => '',
            'contenu' => '<p><strong>Khoa học m&aacute;y t&iacute;nh</strong>&nbsp;(<a title="Tiếng Anh" href="https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Anh">tiếng Anh</a>:&nbsp;<em><span lang="en">Computer Science</span></em>) l&agrave; ng&agrave;nh nghi&ecirc;n cứu c&aacute;c cơ sở l&yacute; thuyết về&nbsp;<a title="Th&ocirc;ng tin" href="https://vi.wikipedia.org/wiki/Th%C3%B4ng_tin">th&ocirc;ng tin</a>&nbsp;v&agrave;&nbsp;<a title="T&iacute;nh to&aacute;n" href="https://vi.wikipedia.org/wiki/T%C3%ADnh_to%C3%A1n">t&iacute;nh to&aacute;n</a>&nbsp;c&ugrave;ng sự thực hiện v&agrave; ứng dụng của ch&uacute;ng trong c&aacute;c hệ thống&nbsp;<a title="M&aacute;y t&iacute;nh" href="https://vi.wikipedia.org/wiki/M%C3%A1y_t%C3%ADnh">m&aacute;y t&iacute;nh</a>. Khoa học m&aacute;y t&iacute;nh l&agrave; c&aacute;ch tiếp cận khoa học v&agrave; thực tiễn để t&iacute;nh to&aacute;n v&agrave; c&aacute;c ứng dụng của n&oacute; v&agrave; nghi&ecirc;n cứu c&oacute; hệ thống về&nbsp;<a class="mw-redirect" title="T&iacute;nh khả thi" href="https://vi.wikipedia.org/wiki/T%C3%ADnh_kh%E1%BA%A3_thi">t&iacute;nh khả thi</a>, cấu tr&uacute;c, biểu hiện v&agrave; cơ giới h&oacute;a c&aacute;c&nbsp;<a title="Chương tr&igrave;nh con" href="https://vi.wikipedia.org/wiki/Ch%C6%B0%C6%A1ng_tr%C3%ACnh_con">thủ tục</a>&nbsp;(hoặc c&aacute;c&nbsp;<a title="Thuật to&aacute;n" href="https://vi.wikipedia.org/wiki/Thu%E1%BA%ADt_to%C3%A1n">thuật to&aacute;n</a>) cơ bản l&agrave;m cơ sở cho việc thu thập, đại diện, xử l&yacute;, lưu trữ, truyền th&ocirc;ng v&agrave; truy cập th&ocirc;ng tin. Một định nghĩa thay thế, gọn g&agrave;ng hơn về khoa học m&aacute;y t&iacute;nh l&agrave; nghi&ecirc;n cứu về c&aacute;c quy tr&igrave;nh thuật to&aacute;n tự động h&oacute;a m&agrave; c&oacute; thể nh&acirc;n rộng tr&ecirc;n quy m&ocirc; lớn. Một nh&agrave; khoa học m&aacute;y t&iacute;nh l&agrave; chuy&ecirc;n gia về&nbsp;<a title="L&yacute; thuyết t&iacute;nh to&aacute;n" href="https://vi.wikipedia.org/wiki/L%C3%BD_thuy%E1%BA%BFt_t%C3%ADnh_to%C3%A1n">l&yacute; thuyết t&iacute;nh to&aacute;n</a>&nbsp;v&agrave;&nbsp;<a title="Thiết kế" href="https://vi.wikipedia.org/wiki/Thi%E1%BA%BFt_k%E1%BA%BF">thiết kế</a>&nbsp;c&aacute;c&nbsp;<a class="new" title="Hệ thống t&iacute;nh to&aacute;n (trang kh&ocirc;ng tồn tại)" href="https://vi.wikipedia.org/w/index.php?title=H%E1%BB%87_th%E1%BB%91ng_t%C3%ADnh_to%C3%A1n&amp;action=edit&amp;redlink=1">hệ thống t&iacute;nh to&aacute;n</a>.<sup id="cite_ref-1" class="reference"><a href="https://vi.wikipedia.org/wiki/Khoa_h%E1%BB%8Dc_m%C3%A1y_t%C3%ADnh#cite_note-1">[1]</a></sup></p>
<p>Khoa học m&aacute;y t&iacute;nh gồm nhiều ng&agrave;nh hẹp; một số ng&agrave;nh tập trung v&agrave;o c&aacute;c ứng dụng thực tiễn cụ thể chẳng hạn như&nbsp;<a title="Đồ họa m&aacute;y t&iacute;nh" href="https://vi.wikipedia.org/wiki/%C4%90%E1%BB%93_h%E1%BB%8Da_m%C3%A1y_t%C3%ADnh">đồ họa m&aacute;y t&iacute;nh</a>, trong khi một số ng&agrave;nh kh&aacute;c lại tập trung nghi&ecirc;n cứu đến t&iacute;nh chất cơ bản của c&aacute;c b&agrave;i to&aacute;n t&iacute;nh to&aacute;n như&nbsp;<a title="L&yacute; thuyết độ phức tạp t&iacute;nh to&aacute;n" href="https://vi.wikipedia.org/wiki/L%C3%BD_thuy%E1%BA%BFt_%C4%91%E1%BB%99_ph%E1%BB%A9c_t%E1%BA%A1p_t%C3%ADnh_to%C3%A1n">l&yacute; thuyết độ phức tạp t&iacute;nh to&aacute;n</a>). Ngo&agrave;i ra c&ograve;n c&oacute; những ng&agrave;nh kh&aacute;c nghi&ecirc;n cứu c&aacute;c vấn đề trong việc thực thi c&aacute;c phương ph&aacute;p t&iacute;nh to&aacute;n. V&iacute; dụ, ng&agrave;nh&nbsp;<a title="L&yacute; thuyết ng&ocirc;n ngữ lập tr&igrave;nh" href="https://vi.wikipedia.org/wiki/L%C3%BD_thuy%E1%BA%BFt_ng%C3%B4n_ng%E1%BB%AF_l%E1%BA%ADp_tr%C3%ACnh">l&yacute; thuyết ng&ocirc;n ngữ lập tr&igrave;nh</a>&nbsp;nghi&ecirc;n cứu những phương thức m&ocirc; tả c&aacute;ch t&iacute;nh to&aacute;n kh&aacute;c nhau, trong khi ng&agrave;nh&nbsp;<a title="Lập tr&igrave;nh m&aacute;y t&iacute;nh" href="https://vi.wikipedia.org/wiki/L%E1%BA%ADp_tr%C3%ACnh_m%C3%A1y_t%C3%ADnh">lập tr&igrave;nh</a>&nbsp;nghi&ecirc;n cứu c&aacute;ch sử dụng c&aacute;c&nbsp;<a title="Ng&ocirc;n ngữ lập tr&igrave;nh" href="https://vi.wikipedia.org/wiki/Ng%C3%B4n_ng%E1%BB%AF_l%E1%BA%ADp_tr%C3%ACnh">ng&ocirc;n ngữ lập tr&igrave;nh</a>&nbsp;v&agrave; c&aacute;c&nbsp;<a title="Hệ thống phức tạp" href="https://vi.wikipedia.org/wiki/H%E1%BB%87_th%E1%BB%91ng_ph%E1%BB%A9c_t%E1%BA%A1p">hệ thống phức tạp</a>, v&agrave; ng&agrave;nh&nbsp;<a class="mw-redirect" title="Tương t&aacute;c người-m&aacute;y" href="https://vi.wikipedia.org/wiki/T%C6%B0%C6%A1ng_t%C3%A1c_ng%C6%B0%E1%BB%9Di-m%C3%A1y">tương t&aacute;c người-m&aacute;y</a>&nbsp;tập trung v&agrave;o những th&aacute;ch thức trong việc l&agrave;m cho m&aacute;y t&iacute;nh v&agrave; c&ocirc;ng việc t&iacute;nh to&aacute;n hữu &iacute;ch, v&agrave; dễ sử dụng đối với mọi người d&ugrave;ng.</p>',
            'created_at' => '2022-02-10 10:40:47',
            'updated_at' => '2022-02-10 10:40:47',
        ),
        2 => 
        array (
            'id' => 3,
            'course_id' => 1,
            'title' => 'Chương 2',
            'descriptif' => 'chương này tập chung vào phần cứng',
            'image' => 'lessons/default2.png',
            'objectif' => '',
            'contenu' => '<p><iframe src="//www.youtube.com/embed/G4WC4RmJVdE?list=RDRIYQjOVrPS8" width="560" height="314" allowfullscreen="allowfullscreen"></iframe></p>
<pre class="language-python"><code># Python Program to calculate the square root

# Note: change this value for a different result
num = 8 

# To take the input from the user
#num = float(input(\'Enter a number: \'))

num_sqrt = num ** 0.5
print(\'The square root of %0.3f is %0.3f\'%(num ,num_sqrt))</code></pre>',
            'created_at' => '2022-02-10 10:50:27',
            'updated_at' => '2022-02-10 10:50:27',
        ),
    ));
        
        
    }
}