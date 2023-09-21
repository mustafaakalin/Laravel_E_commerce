<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('tag_id')->nullable()->constrained('tags')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            // $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_bestseller')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_top')->default(false);
            $table->boolean('is_sale')->default(false);
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_available')->default(true);
            $table->boolean('is_in_stock')->default(true);
            $table->boolean('is_out_of_stock')->default(false);
            $table->boolean('is_upcoming')->default(false);
            $table->boolean('is_exclusive')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_discount')->default(false);
            $table->boolean('is_taxable')->default(true);
            $table->boolean('is_promoted')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_draft')->default(false);
            $table->boolean('is_published')->default(false);
            $table->boolean('is_private')->default(false);
            $table->boolean('is_recommended')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->string('sku')->unique();
            $table->string('barcode')->unique();
            $table->string('mpn')->unique()->nullable();
            $table->string('gtin')->unique()->nullable();
            $table->string('model')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('gallery')->nullable();
            $table->string('video')->nullable();
            $table->string('pdf')->nullable();
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            // $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            // $table->foreignId('store_id')->nullable()->constrained('stores')->onDelete('cascade');
            // $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('cascade');
            // $table->foreignId('state_id')->nullable()->constrained('states')->onDelete('cascade');
            // $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade');
            // $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('cascade');
            // $table->foreignId('location_id')->nullable()->constrained('locations')->onDelete('cascade');
            // $table->foreignId('address_id')->nullable()->constrained('addresses')->onDelete('cascade');
            // $table->foreignId('currency_id')->nullable()->constrained('currencies')->onDelete('cascade');
            // $table->foreignId('unit_id')->nullable()->constrained('units')->onDelete('cascade');
            // $table->foreignId('weight_id')->nullable()->constrained('weights')->onDelete('cascade');
            // $table->foreignId('size_id')->nullable()->constrained('sizes')->onDelete('cascade');
            // $table->foreignId('color_id')->nullable()->constrained('colors')->onDelete('cascade');
            // $table->foreignId('material_id')->nullable()->constrained('materials')->onDelete('cascade');
            // $table->foreignId('shape_id')->nullable()->constrained('shapes')->onDelete('cascade');
            // $table->foreignId('style_id')->nullable()->constrained('styles')->onDelete('cascade');
            // $table->foreignId('design_id')->nullable()->constrained('designs')->onDelete('cascade');
            // $table->foreignId('texture_id')->nullable()->constrained('textures')->onDelete('cascade');
            // $table->foreignId('thickness_id')->nullable()->constrained('thicknesses')->onDelete('cascade');
            // $table->foreignId('grade_id')->nullable()->constrained('grades')->onDelete('cascade');
            // $table->foreignId('quality_id')->nullable()->constrained('qualities')->onDelete('cascade');
            // $table->foreignId('finish_id')->nullable()->constrained('finishes')->onDelete('cascade');
            // $table->foreignId('pattern_id')->nullable()->constrained('patterns')->onDelete('cascade');
            // $table->foreignId('weave_id')->nullable()->constrained('weaves')->onDelete('cascade');
            // $table->foreignId('thread_id')->nullable()->constrained('threads')->onDelete('cascade');
            // $table->foreignId('count_id')->nullable()->constrained('counts')->onDelete('cascade');
            // $table->foreignId('density_id')->nullable()->constrained('densities')->onDelete('cascade');
            // $table->foreignId('warp_id')->nullable()->constrained('warps')->onDelete('cascade');
            // $table->foreignId('weft_id')->nullable()->constrained('wefts')->onDelete('cascade');
            // $table->foreignId('pile_id')->nullable()->constrained('piles')->onDelete('cascade');
            // $table->foreignId('size_id')->nullable()->constrained('sizes')->onDelete('cascade');
            // $table->foreignId('tax_id')->nullable()->constrained('taxes')->onDelete('cascade');
            // $table->foreignId('discount_id')->nullable()->constrained('discounts')->onDelete('cascade');
            // $table->foreignId('shipping_id')->nullable()->constrained('shippings')->onDelete('cascade');
            // $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('cascade');
            // $table->foreignId('return_id')->nullable()->constrained('returns')->onDelete('cascade');
            // $table->foreignId('exchange_id')->nullable()->constrained('exchanges')->onDelete('cascade');
            // $table->foreignId('warranty_id')->nullable()->constrained('warranties')->onDelete('cascade');
            // $table->foreignId('guarantee_id')->nullable()->constrained('guarantees')->onDelete('cascade');
            // $table->foreignId('replacement_id')->nullable()->constrained('replacements')->onDelete('cascade');
            // $table->foreignId('refund_id')->nullable()->constrained('refunds')->onDelete('cascade');
            // $table->foreignId('commission_id')->nullable()->constrained('commissions')->onDelete('cascade');
            // $table->foreignId('affiliate_id')->nullable()->constrained('affiliates')->onDelete('cascade');
            // $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('cascade');
            // $table->foreignId('voucher_id')->nullable()->constrained('vouchers')->onDelete('cascade');
            // $table->foreignId('giftcard_id')->nullable()->constrained('giftcards')->onDelete('cascade');
            // $table->foreignId('reward_id')->nullable()->constrained('rewards')->onDelete('cascade');
            // $table->foreignId('point_id')->nullable()->constrained('points')->onDelete('cascade');
            // $table->foreignId('level_id')->nullable()->constrained('levels')->onDelete('cascade');
            // $table->foreignId('badge_id')->nullable()->constrained('badges')->onDelete('cascade');
            // $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('cascade');
            // $table->foreignId('type_id')->nullable()->constrained('types')->onDelete('cascade');
            // $table->foreignId('mode_id')->nullable()->constrained('modes')->onDelete('cascade');
            // $table->foreignId('method_id')->nullable()->constrained('methods')->onDelete('cascade');
            // $table->foreignId('frequency_id')->nullable()->constrained('frequencies')->onDelete('cascade');
            // $table->foreignId('duration_id')->nullable()->constrained('durations')->onDelete('cascade');
            // $table->foreignId('period_id')->nullable()->constrained('periods')->onDelete('cascade');
            // $table->foreignId('interval_id')->nullable()->constrained('intervals')->onDelete('cascade');
            // $table->foreignId('day_id')->nullable()->constrained('days')->onDelete('cascade');
            // $table->foreignId('hour_id')->nullable()->constrained('hours')->onDelete('cascade');
            // $table->foreignId('minute_id')->nullable()->constrained('minutes')->onDelete('cascade');
            // $table->foreignId('second_id')->nullable()->constrained('seconds')->onDelete('cascade');
            // $table->foreignId('week_id')->nullable()->constrained('weeks')->onDelete('cascade');
            // $table->foreignId('month_id')->nullable()->constrained('months')->onDelete('cascade');
            // $table->foreignId('quarter_id')->nullable()->constrained('quarters')->onDelete('cascade');
            // $table->foreignId('year_id')->nullable()->constrained('years')->onDelete('cascade');
            // $table->foreignId('period_id')->nullable()->constrained('periods')->onDelete('cascade');
            // $table->foreignId('interval_id')->nullable()->constrained('intervals')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
