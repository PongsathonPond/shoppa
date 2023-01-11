<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('page.admin.products.index', compact('product'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'total' => 'required|max:255',
            'description' => 'required|max:255',

        ],
            ['location_name.required' => "กรุณาป้อนห้อง",
                'location_building.required' => "กรุณาป้อนอาคาร",
                'location_floor.required' => "กรุณาป้อนชั้น",
                'location_image.required' => "กรุณาเพิ่มรูปภาพ",

            ]

        );

        if (count($request->imageall) != 5) {
            return redirect()->back()->with('error', "บันทึกข้อมูลเรียบร้อย");
        }

        #1
        $room_image = $request->imageall[0];
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($room_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $upload_location = 'img/location/';
        $full_path1 = $upload_location . $img_name;
        #2

        $room_image2 = $request->imageall[1];
        $name_gen2 = hexdec(uniqid());
        $img_ext2 = strtolower($room_image2->getClientOriginalExtension());
        $img_name2 = $name_gen2 . '.' . $img_ext2;
        $upload_location2 = 'img/location/';
        $full_path2 = $upload_location2 . $img_name2;

        #3
        $room_image3 = $request->imageall[2];
        $name_gen3 = hexdec(uniqid());
        $img_ext3 = strtolower($room_image3->getClientOriginalExtension());
        $img_name3 = $name_gen3 . '.' . $img_ext3;
        $upload_location3 = 'img/location/';
        $full_path3 = $upload_location3 . $img_name3;

        #4
        $room_image4 = $request->imageall[3];
        $name_gen4 = hexdec(uniqid());
        $img_ext4 = strtolower($room_image4->getClientOriginalExtension());
        $img_name4 = $name_gen4 . '.' . $img_ext4;
        $upload_location4 = 'img/location/';
        $full_path4 = $upload_location4 . $img_name4;

        #5
        $room_image5 = $request->imageall[4];
        $name_gen5 = hexdec(uniqid());
        $img_ext5 = strtolower($room_image5->getClientOriginalExtension());
        $img_name5 = $name_gen5 . '.' . $img_ext5;
        $upload_location5 = 'img/location/';
        $full_path5 = $upload_location5 . $img_name5;

        $addcal = new Product;

        $addcal->image1 = $full_path1;
        $addcal->image2 = $full_path2;
        $addcal->image3 = $full_path3;
        $addcal->image4 = $full_path4;
        $addcal->image5 = $full_path5;

        $addcal->name = $request->name;
        $addcal->price = $request->price;
        $addcal->total = $request->total;
        $addcal->description = $request->description;
        $addcal->created_at = Carbon::now();
        $addcal->save();
        //อัพโหลดภาพไปไดเรกทอรี่
        $room_image->move($upload_location, $img_name);
        $room_image2->move($upload_location, $img_name2);
        $room_image3->move($upload_location, $img_name3);
        $room_image4->move($upload_location, $img_name4);
        $room_image5->move($upload_location, $img_name5);
        return redirect()->back()->with('success', "บันทึกข้อมูลเรียบร้อย");
    }

    public function edit($id)
    {

        $Product = Product::find($id);
        return view('page.users.products.detail', compact('Product'));
    }

}
