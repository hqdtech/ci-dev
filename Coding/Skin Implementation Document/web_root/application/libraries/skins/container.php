<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * hqd's class
*/

class Container
{
	// reference to the library object
	private $ci;

	public function __construct()
	{
		// get hold of the library object
		$this->ci =& get_instance();
	}

	public function CreateHMenu($data, $id=null)
	{
		$ret="";

		$ret .= "<nav class=\"art-nav clearfix\" ".($id!=null? "id=\"".$id."\"":""). " >";
		$ret .= "<div class=\"art-nav-inner\">";
		$ret .= "<ul class=\"art-hmenu\">";
		if($data['content'] != null && is_array($data['content']))
		{
			foreach ($data['content'] as $value)
			{
				$ret .= "<li><a href=\"".$value['url']."\"". (isset($value['active'])? ($value['active']? 'class="active"':''):'') .">" . $value['name']."</a></li>";
			}
		}
		$ret .= "</ul></div></nav>";

		return $ret;
	}
	public function CreateVMenu($data, $id=null)
	{
		$ret="";
		if($data != null && is_array($data))
		{
			$ret .= "<div class=\"art-vmenublock clearfix\" ".($id!=null? "id=\"".$id."\"":""). " >";
			$ret .= "<div class=\"art-vmenublockheader\">";
			$ret .= "<h3 class=\"t\">".$data['title']."</h3>";
			$ret .= "</div>";
			$ret .= "<div class=\"art-vmenublockcontent\">";
			$ret .= "<ul class=\"art-vmenu\">";
			if($data['content'] != null && is_array($data['content']))
			{
				foreach ($data['content'] as $value)
				{
					$ret .= "<li><a href=\"".$value['url']."\"". (isset($value['active'])? ($value['active']? 'class="active"':''):'') .">" . $value['name']."</a></li>";
				}
			}
			$ret .= "</ul></div></div>";
		}
		return $ret;
	}
	public function CreateBlock($data, $id=null)
	{
		$ret="";
		if($data != null && is_array($data))
		{
			$ret .= "<div class=\"art-block clearfix\" ".($id!=null? "id=\"".$id."\"":""). " >";
			$ret .= "<div class=\"art-blockheader\">";
			$ret .= "<h3 class=\"t\">".$data['title']."</h3>";
			$ret .= "</div>";
			$ret .= "<div class=\"art-blockcontent\">";
			$ret .= "<div>".$data['content']."</div>";
			$ret .= "</div></div>";
		}
		return $ret;
	}
	public function CreateArticle($data, $id=null)
	{
		$ret="";
		if($data != null && is_array($data))
		{
			$ret .= "<article class=\"art-post art-article\"  ".($id!=null? "id=\"".$id."\"":""). " >";
			$ret .= "<div class=\"art-postcontent art-postcontent-0 clearfix\">".$data['content']."</div>";
			$ret .= "</article>";
		}
		return $ret;
	}

}

?>