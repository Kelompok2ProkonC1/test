import 'package:dart_application_1/dart_application_1.dart'
    as dart_application_1;

void proses(fungsi) {
  print(fungsi(5) + 50);
}

void main() {
  proses((x) => x > 2 ? x * 10 : x * 2); //berapa hasilnya?
}
