<?php

namespace App\Services;

use App\Models\Products;
use App\Models\Order;

class CartService
{
    public function addCartItem($id)
    {
        $product = Products::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
            $cart[$id]['so_luong']++;
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới vào
            $cart[$id] = [
                "product_id" => $id,
                "product_name" => $product->product_name,
                "product_image" => $product->product_image,
                "price" => $product->price - $product->discount_price,
                "so_luong" => 1
            ];
        }

        session()->put('cart', $cart);
        session()->flash('success', 'Sản phẩm đã được thêm vào giỏ hàng.');

        return redirect()->back();
    }

    public function getCartData()
    {
        return session()->get('cart', []);
    }

    public function countCartItems()
    {
        $cart = session()->get('cart', []);
        $totalItems = 0;

        foreach ($cart as $item) {
            $totalItems += $item['so_luong'];
        }

        return $totalItems;
    }

    public function deleteCartItem($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function updateCartItemQuantity($request)
    {
        $quantities = $request->input('quantities');
        $cart = $request->session()->get('cart', []);

        if ($cart !== null) {
            foreach ($quantities as $product_id => $quantity) {
                foreach ($cart as &$item) {
                    if ($item['product_id'] == $product_id) {
                        $item['so_luong'] = $quantity;
                    }
                }
            }
        } else {
            dd("Cart is null!");
        }

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function createOrder($request)
    {
        // Các bước để tạo đơn hàng
    }
}