package com.example.JustCart_ver4;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class Frag_event2Activity extends AppCompatActivity {

    private ImageButton btn_shop, btn_home, btn_mypage;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_frag_event2);

        btn_shop = findViewById(R.id.btn_shop5);
        btn_home = findViewById(R.id.btn_home5);
        btn_mypage = findViewById(R.id.btn_mypage5);

        //장바구니 버튼을 클릭 시 수행
        btn_shop.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Frag_event2Activity.this, ShopActivity2.class);
                startActivity(intent);
            }
        });

        //홈 버튼을 클릭 시 수행
        btn_home.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Frag_event2Activity.this, MainActivity.class);
                startActivity(intent);
            }
        });

        //마이페이지 버튼을 클릭 시 수행
        btn_mypage.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Frag_event2Activity.this, LoginActivity.class);
                startActivity(intent);
            }
        });
    }
}