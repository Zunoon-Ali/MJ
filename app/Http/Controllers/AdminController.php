<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // 1. User Count (Non-admin)
        $userCount = User::where('is_admin', 0)->count();

        // 2. Total Sales (Only completed/shipped? Or all revenue? Usually all non-cancelled)
        $totalSales = Order::where('status', '!=', 'cancelled')->sum('total');

        // 3. Stock Level
        $totalStock = Product::sum('stock');

        // 4. Shipped Orders
        $shippedOrders = Order::where('status', 'shipped')->count();

        // 5. Reviews
        $reviewCount = Review::count();

        // 6. Chart Data (Last 7 Days Sales)
        $sevenDaysAgo = now()->subDays(6)->startOfDay();

        $salesData = Order::where('status', '!=', 'cancelled')
            ->where('created_at', '>=', $sevenDaysAgo)
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(total) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Fill in missing days with 0
        $chartLabels = [];
        $chartValues = [];
        for ($i = 0; $i < 7; $i++) {
            $date = now()->subDays(6 - $i)->format('Y-m-d');
            $chartLabels[] = now()->subDays(6 - $i)->format('M d'); // Display format

            $dayData = $salesData->firstWhere('date', $date);
            $chartValues[] = $dayData ? $dayData->total : 0;
        }

        return view('dashboard.admin.dashboard', compact(
            'userCount',
            'totalSales',
            'totalStock',
            'shippedOrders',
            'reviewCount',
            'chartLabels',
            'chartValues'
        ));
    }
}
