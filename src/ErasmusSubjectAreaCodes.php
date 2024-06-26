<?php

namespace Drupal\erasmus_subject_area_code;

class ErasmusSubjectAreaCodes implements ErasmusSubjectAreaCodesInterface {

  /**
   * Curated list of Erasmus Subject Area codes.
   *
   * @return array
   */
  public static function codes(): array {
    return [
      '01.0 Agricultural Sciences' => [
        '01.1' => '01.1	Agriculture',
        '01.2' => '01.2 Agricultural Economics',
        '01.3' => '01.3 Food Science and Technology',
        '01.4' => '01.4 Horticulture',
        '01.5' => '01.5 Fisheries',
        '01.6' => '01.6 Forestry',
        '01.7' => '01.7 Animal Husbandry',
        '01.8' => '01.8 Tropical/Subtropical Agriculture',
      ],
      '02.0 Architecture, Urban and Regional Planning' => [
        '02.1' => '02.1	Architecture',
        '02.2' => '02.2 Interior Design',
        '02.3' => '02.3 Urban Planning',
        '02.4' => '02.4 Regional Planning',
        '02.5' => '02.5 Landscape Architecture',
        '02.6' => '02.6 Transport and Traffic Studies',
      ],
      '03.0 Art and Design' => [
        '03.1' => '03.1	Fine Art (Painting, Sculpture, Printmaking)',
        '03.2' => '03.2 Music and Musicology',
        '03.3' => '03.3 Performing Arts',
        '03.4' => '03.4 Photography, Cinematography',
        '03.5' => '03.5 Design (Graphic Design, Industrial Design, Fashion, Textile)',
        '03.6' => '03.6 History of Art',
      ],
      '04.0 Business Studies, Management Science' => [
        '04.1' => '04.1	Business Studies with languages',
        '04.2' => '04.2 Business Studies with technology',
        '04.3' => '04.3 Accountancy, Financial Management',
        '04.4' => '04.4 Tourism, Catering, Hotel Management',
        '04.5' => '04.5 Industrial Relations and Personnel Management',
        '04.6' => '04.6 Secretarial Studies',
        '04.7' => '04.7 Marketing and Sales Management',
      ],
      '05.0 Education, Teacher Training' => [
        '05.1' => '05.1	Teacher Training',
        '05.2' => '05.2 Primary Education',
        '05.3' => '05.3 Secondary Education',
        '05.4' => '05.4 Vocational and Technical Education',
        '05.5' => '05.5 Adult Education',
        '05.6' => '05.6 Special Education',
        '05.7' => '05.7 Educational Science, Comparative Education',
        '05.8' => '05.8 Educational Psychology',
      ],
      '06.0 Engineering, Technology' => [
        '06.1' => '06.1	Mechanical Engineering',
        '06.2' => '06.2 Electrical Engineering',
        '06.3' => '06.3 Chemical Engineering',
        '06.4' => '06.4 Civil Engineering',
        '06.5' => '06.5 Electronic Engineering, Telecommunications',
        '06.6' => '06.6 Manufacturing Sciences (including CAD, CAM, CAE)',
        '06.7' => '06.7 Materials Science',
        '06.8' => '06.8 Aeronautical Engineering',
      ],
      '07.0 Geography, Geology' => [
        '07.1' => '07.1	Geography',
        '07.2' => '07.2 Environmental Sciences, Ecology',
        '07.3' => '07.3 Geology',
        '07.4' => '07.4 Soil and Water Sciences',
        '07.6' => '07.6 Geodesy, Cartography, Remote Sensing',
        '07.7' => '07.7 Meteorology',
        '07.9' => '07.9 Others - Geography, Geology',
      ],
      '08.0 Humanities' => [
        '08.1' => '08.1	Philosophy',
        '08.2' => '08.2 Theology',
        '08.3' => '08.3 History',
        '08.4' => '08.4 Archaeology',
      ],
      '09.0 Languages and Philological Sciences' => [
        '09.1' => '09.1	Modern EC Languages',
        '09.2' => '09.2 General and comparative literature',
        '09.3' => '09.3 Linguistics',
        '09.4' => '09.4 Translation, Interpretation',
        '09.5' => '09.5 Classical Philology',
        '09.6' => '09.6 Non-EC Languages',
        '09.8' => '09.8 Less Widely Taught Languages',
        '09.9' => '09.9 Others - Languages and Philological Sciences',
      ],
      '10.0 Law' => [
        '10.1' => '10.1	Comparative Law, Law with Languages',
        '10.2' => '10.2 International Law',
        '10.3' => '10.3 Civil Law',
        '10.4' => '10.4 Criminal Law, Criminology',
        '10.5' => '10.5 Constitutional /Public Law',
        '10.6' => '10.6 Public Administration',
        '10.7' => '10.7 European Community/EU Law',
        '10.9' => '10.9 Others - Law',
      ],
      '11.0 Mathematics, Informatics' => [
        '11.1' => '11.1	Mathematics',
        '11.2' => '11.2 Statistics',
        '11.3' => '11.3 Informatics, Computer Science',
        '11.4' => '11.4 Artificial Intelligence',
        '11.5' => '11.5 Actuarial Science',
      ],
      '12.0 Medical Sciences' => [
        '12.1' => '12.1	Medicine',
        '12.2' => '12.2 Psychiatry and Clinical Psychology',
        '12.3' => '12.3 Dentistry',
        '12.4' => '12.4 Veterinary Medicine',
        '12.5' => '12.5 Pharmacy',
        '12.6' => '12.6 Nursing, Midwifery, Physiotherapy',
        '12.7' => '12.7 Public Health',
        '12.8' => '12.8 Medical Technology',
      ],
      '13.0 Natural Sciences' => [
        '13.1' => '13.1	Biology',
        '13.2' => '13.2 Physics',
        '13.3' => '13.3 Chemistry',
        '13.4' => '13.4 Microbiology, Biotechnology',
        '13.5' => '13.5 Nuclear and High Energy Physics',
        '13.6' => '13.6 Biochemistry',
        '13.7' => '13.7 Astronomy, Astrophysics',
        '13.8' => '13.8 Oceanography',
      ],
      '14.0 Social Sciences' => [
        '14.1' => '14.1	Political Science',
        '14.2' => '14.2 Sociology',
        '14.3' => '14.3 Economics',
        '14.4' => '14.4 Psychology and Behavioural Sciences',
        '14.5' => '14.5 Social Work',
        '14.6' => '14.6 International Relations, European Studies, Area Studies',
        '14.7' => '14.7 Anthropology',
        '14.8' => '14.8 Development Studies',
      ],
      '15.0 Communication and Information Sciences' => [
        '15.1' => '15.1	Journalism',
        '15.2' => '15.2 Radio/TV Broadcasting',
        '15.3' => '15.3 Public Relations, Publicity, Advertising',
        '15.4' => '15.4 Library Science',
        '15.5' => '15.5 Documentation, Archiving',
        '15.6' => '15.6 Museum Studies, Conservation',
      ],
      '16.0 Other Areas of Study' => [
        '16.1' => '16.1	Physical Education, Sport Science',
        '16.2' => '16.2 Leisure Studies',
        '16.3' => '16.3 Home Economics, Nutrition',
        '16.4' => '16.4 Nautical Science, Navigation',
        '16.9' => '16.9 Others in Other Areas of Study',
      ],
    ];
  }

}
