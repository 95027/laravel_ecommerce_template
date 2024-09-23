<?php

namespace Database\Seeders;

use App\Models\SidebarSection;
use Illuminate\Database\Seeder;

class SidebarSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['heading' => 'Main Page', 'title' => 'Dashboard', 'slug' => 'dashboard', 'icon' => 'bxs-dashboard', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Employees', 'title' => 'Employees', 'slug' => 'employees', 'icon' => 'fa-solid fa-users', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Users', 'title' => 'User Management', 'slug' => 'user-management', 'icon' => 'bx bx-user', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Products', 'title' => 'Products', 'slug' => 'product', 'icon' => 'bxl-product-hunt', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Orders', 'title' => 'Order Management', 'slug' => 'order-management', 'icon' => 'bx bx-sort', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Contact Forms', 'title' => 'Contacts', 'slug' => 'contact-form', 'icon' => 'bx bxs-contact', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Support', 'title' => 'Support Ticket', 'slug' => 'support-ticket', 'icon' => 'bx bx-sort', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Roles & Permissions', 'title' => 'Roles', 'slug' => 'roles-permissions', 'icon' => 'bx bx-user-plus', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Reviews', 'title' => 'Reviews', 'slug' => 'reviews', 'icon' => 'bxs-star-half', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Coupons', 'title' => 'Coupons', 'slug' => 'coupons', 'icon' => 'bxs-coupon', 'enabled' => true, 'parentId' => null],
            ['heading' => 'All Reports', 'title' => 'Reports', 'slug' => 'reports', 'icon' => 'bxs-report', 'enabled' => true, 'parentId' => null],
            ['heading' => 'Roles & Permissions', 'title' => 'Add Role', 'slug' => 'roles-permissions/add', 'icon' => 'bx-user-plus', 'enabled' => true, 'parentId' => 8],
            ['heading' => 'Roles & Permissions', 'title' => 'Assign Permissions', 'slug' => 'roles-permissions/assign', 'icon' => 'bx-user-plus', 'enabled' => true, 'parentId' => 8],
            ['heading' => 'Products', 'title' => 'Parent Category', 'slug' => 'category', 'icon' => 'bxl-product-hunt', 'enabled' => true, 'parentId' => 4],
            ['heading' => 'Products', 'title' => 'Sub Category', 'slug' => 'category/sub-category', 'icon' => 'bxl-product-hunt', 'enabled' => true, 'parentId' => 4],
            ['heading' => 'Products', 'title' => 'Brands', 'slug' => 'brand', 'icon' => 'bxl-product-hunt', 'enabled' => true, 'parentId' => 4],
            ['heading' => 'All Reports', 'title' => 'Transaction Report', 'slug' => 'reports/transaction', 'icon' => 'bxs-report', 'enabled' => true, 'parentId' => 12],
            ['heading' => 'All Reports', 'title' => 'Sales Report', 'slug' => 'reports/sales', 'icon' => 'bxs-report', 'enabled' => true, 'parentId' => 12],
            ['heading' => 'All Reports', 'title' => 'Product Report', 'slug' => 'reports/product', 'icon' => 'bxs-report', 'enabled' => true, 'parentId' => 12],
            ['heading' => 'All Reports', 'title' => 'Brand Report', 'slug' => 'reports/brand', 'icon' => 'bxs-report', 'enabled' => true, 'parentId' => 12],
        ];

        foreach ($sections as $section) {
            SidebarSection::create($section);
        }
    }
}
