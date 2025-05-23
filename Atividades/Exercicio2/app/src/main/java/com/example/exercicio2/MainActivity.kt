package com.example.exercicio2

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.exercicio2.ui.theme.Exercicio2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Exercicio2Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFFADD8E6) // Cor do fundo
    ) {
        Column (
            verticalArrangement = Arrangement.Center, //Deixa no centro
            horizontalAlignment = Alignment.CenterHorizontally)
        {
            Text(text = "Celular",
                style =  TextStyle (fontSize = 30.sp),
                color = Color.Black)

            

            Text( text = "R$2000",
                style =  TextStyle (fontSize = 30.sp),
                color = Color.Black
            )
            Spacer(modifier = Modifier.height(10.dp))
            Box() {
                Card {
                    Text(
                        text = "Comprar",
                        Modifier.padding(35.dp),
                        style = TextStyle (
                            color = Color.Black,
                            fontSize = 25.sp
                        )
                    )

                }
            }
        }
    }
}


