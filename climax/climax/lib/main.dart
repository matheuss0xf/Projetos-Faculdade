import 'package:climax/screens/home.dart';
import 'package:climax/theme/theme.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(const Climax());
}

class Climax extends StatelessWidget {
  const Climax({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context){
    return MaterialApp(
      home: Home(),
      title: "Climax",
      debugShowCheckedModeBanner: false,
      theme: lightTheme(),
      themeMode: ThemeMode.system,
    );
  }
}

